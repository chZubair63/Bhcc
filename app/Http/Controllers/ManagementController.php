<?php

namespace App\Http\Controllers;

use App\Models\Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManagementController extends Controller
{
    // Show all management records in the index page
    public function index()
    {
        // Fetch all management records
        $managements = Management::all(); // Using Eloquent Model
        return view('admin.indexpage.Management.index', compact('managements')); // Pass the data to the view
    }

    // Show the create form for a new management
    public function create()
    {
        return view('admin.indexpage.Management.create'); // Return the create view
    }

    // Store a new management record
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image',
            'designation' => 'required|string|max:500',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move('storage/assets/images/management', $imageName); // Store the image in 'managements' folder
            $imagePath = $imageName; // Set the image path to store in the database
        }

        // Create new management record
        Management::create([
            'name' => $request->input('name'),
            'image' => $imagePath, // Store the image path
            'designation' => $request->input('designation'),
        ]);

        // Redirect with success feedback
        return redirect()->route('admin.indexpage.Management.index')->with('feedback', 'Management record added successfully!');
    }

    // Show the edit form for an existing management
    public function edit($id)
    {
        $management = Management::findOrFail($id); // Fetch the management by ID
        return view('admin.indexpage.Management.create', compact('management')); // Return the edit view with management data
    }

    // Update an existing management record
    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255',
            'designation' => 'required|string|max:255','image' => 'nullable|image', // Ensure image validation is consistent
        ]);

        $management = Management::findOrFail($id); // Fetch the management by ID

        // Update name and designation
        $management->name = $request->input('name');
        $management->designation = $request->input('designation');

        // Handle image update if new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($management->image && Storage::exists('public/' . $management->image)) {
                Storage::delete('public/' . $management->image);
            }

            // Upload the new image and store it in the desired folder
            $imageName = time() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move('storage/assets/images/management', $imageName); // Store the image in 'managements' folder
            $management->image = $imageName; // Set the new image path
        }

        // Save the updated management record
        $management->save();

        // Redirect with success feedback
        return redirect()->route('admin.indexpage.Management.index')->with('feedback', 'Management record updated successfully!');
    }
}
