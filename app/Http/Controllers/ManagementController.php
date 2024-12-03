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


        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('managements', 'public'); // Store the image in 'managements' folder in public disk
        }

        Management::create([
            'name' => $request->input('name'),
            'image' => $imagePath, // Store the image path
            'designation' => $request->input('designation'),

        ]);

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

        $request->validate([
            'name' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
        ]);

        $management = Management::findOrFail($id); // Fetch the management by ID

        $management->name = $request->input('name');
        $management->designation = $request->input('designation');

        if ($request->hasFile('image')) {
            if ($management->image && Storage::exists('public/' . $management->image)) {
                Storage::delete('public/' . $management->image);
            }

            // Upload the new image and save the path
            $imagePath = $request->file('image')->store('managements', 'public');
            $management->image = $imagePath;
        }

        // Save the updated management record
        $management->save();

        // Redirect to the index page with a success message
        return redirect()->route('admin.indexpage.Management.index')->with('feedback', 'Management record updated successfully!');
    }
}
