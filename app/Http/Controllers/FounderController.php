<?php

namespace App\Http\Controllers;
use App\Models\Founder;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class FounderController extends Controller
{

    public function index()
{
    // Fetch all founders from the database
    $founders = Founder::all();

    // Return the view with the founders data
    return view('admin.indexpage.founder.index', compact('founders'));
}


public function create()
{
    // Return the view for creating a new founder
    return view('admin.indexpage.founder.create');
}

public function store(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'heading' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048', // 2MB max
    ]);

    // Handle file upload
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads/founders', $fileName, 'public');
    }

    // Create a new founder
    $founder = new Founder();
    $founder->name = $validatedData['name'];
    $founder->heading = $validatedData['heading'];
    $founder->description = $validatedData['description'];
    $founder->image = $filePath ?? null; // Store file path or null
    $founder->save();

    // Redirect with success message
    return redirect()->route('founders.index')->with('feedback', 'Founder created successfully!');
}

public function edit($id)
{
    // Find the founder by ID
    $pageTitle = "Update Founder";

    $founder = Founder::findOrFail($id);

    // Return the edit view with the founder data
    return view('admin.indexpage.founder.create', compact('founder', 'pageTitle'));
}

public function update(Request $request, $id)
{
    // Validate the request
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'heading' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Optional image
    ]);

    // Find the founder by ID
    $founder = Founder::findOrFail($id);

    // Handle file upload if a new image is provided
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads/founders', $fileName, 'public');

        // Optionally delete the old image file
        if ($founder->image && Storage::disk('public')->exists($founder->image)) {
            Storage::disk('public')->delete($founder->image);
        }

        $founder->image = $filePath;
    }

    // Update the founder attributes
    $founder->name = $validatedData['name'];
    $founder->heading = $validatedData['heading'];
    $founder->description = $validatedData['description'];
    $founder->save();

    // Redirect with success message
    return redirect()->route('founders.index')->with('feedback', 'Founder updated successfully!');
}




}
