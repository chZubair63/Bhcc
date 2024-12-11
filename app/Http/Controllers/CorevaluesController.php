<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corevalues;
use Illuminate\Support\Facades\Storage;

class CorevaluesController extends Controller
{
    // Display a list of all core values
    public function index()
    {
        // Fetch all core values from the database
        $corevalues = Corevalues::all();

        // Pass the data to the view
        return view('admin.indexpage.corevalues.index', compact('corevalues'));
    }

    // Show the form for creating a new core value
    public function create()
    {
        // Return the view for creating a new core value
        return view('admin.indexpage.corevalues.create');
    }

    // Store a newly created core value in the database
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048', // 2MB max
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/corevalues', $fileName, 'public');
        }

        // Create a new core value
        $corevalue = new Corevalues();
        $corevalue->name = $validatedData['name'];
        $corevalue->description = $validatedData['description'];
        $corevalue->image = $filePath ?? null; // Store file path or null
        $corevalue->save();

        // Redirect with success message
        return redirect()->route('admin.indexpage.corevalues.index')->with('feedback', 'Core value added successfully!');
    }

    // Show the form for editing the specified core value
    public function edit($id)
    {
        // Find the core value by ID
        $corevalue = Corevalues::findOrFail($id);
        $pageTitle = "Update Core Value";

        // Return the edit view with the core value data
        return view('admin.indexpage.corevalues.create', compact('corevalue', 'pageTitle'));
    }

    // Update the specified core value in the database
    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Optional image
        ]);

        // Find the core value by ID
        $corevalue = Corevalues::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/corevalues', $fileName, 'public');

            // Optionally delete the old image file
            if ($corevalue->image && Storage::disk('public')->exists($corevalue->image)) {
                Storage::disk('public')->delete($corevalue->image);
            }

            $corevalue->image = $filePath;
        }

        // Update the core value attributes
        $corevalue->name = $validatedData['name'];
        $corevalue->description = $validatedData['description'];
        $corevalue->save();

        // Redirect with success message
        return redirect()->route('admin.indexpage.corevalues.index')->with('feedback', 'Core value updated successfully!');
    }
}
