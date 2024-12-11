<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indextop;
use Illuminate\Support\Facades\Storage;

class IndextopController extends Controller
{
    // Display a list of all indextop records
    public function index()
    {
        // Fetch all records from the database
        $indextops = Indextop::all();

        // Pass the data to the view
        return view('admin.indexpage.indextop.index', compact('indextops'));
    }

    // Show the form for creating a new indextop record
    public function create()
    {
        // Return the view for creating a new record
        return view('admin.indexpage.indextop.create');
    }

    // Store a newly created indextop record in the database
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'discription' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048', // 2MB max
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/indextops', $fileName, 'public');
        }

        // Create a new record
        $indextop = new Indextop();
        $indextop->name = $validatedData['name'];
        $indextop->discription = $validatedData['discription'];
        $indextop->image = $filePath ?? null; // Store file path or null
        $indextop->save();

        // Redirect with success message
        return redirect()->route('admin.indexpage.indextop.index')->with('feedback', 'Record added successfully!');
    }

    // Show the form for editing the specified indextop record
    public function edit($id)
    {
        // Find the record by ID
        $indextop = Indextop::findOrFail($id);
        $pageTitle = "Update IndexTop Record";

        // Return the edit view with the record data
        return view('admin.indexpage.indextop.create', compact('indextop', 'pageTitle'));
    }

    // Update the specified indextop record in the database
    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'discription' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Optional image
        ]);

        // Find the record by ID
        $indextop = Indextop::findOrFail($id);

        // Handle file upload if a new image is provided
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/indextops', $fileName, 'public');

            // Optionally delete the old image file
            if ($indextop->image && Storage::disk('public')->exists($indextop->image)) {
                Storage::disk('public')->delete($indextop->image);
            }

            $indextop->image = $filePath;
        }

        // Update the record attributes
        $indextop->name = $validatedData['name'];
        $indextop->discription = $validatedData['discription'];
        $indextop->save();

        // Redirect with success message
        return redirect()->route('admin.indexpage.indextop.index')->with('feedback', 'Record updated successfully!');
    }
}
