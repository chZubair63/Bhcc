<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\Storage;



class ServicesController extends Controller
{
    

    public function index()
    {
        // Fetch all services from the database
        $services = Services::all();

        // Pass the data to the view
        return view('admin.indexpage.servicess.index', compact('services'));
    }



    public function create()
{
    // Return the view for creating a new service
    return view('admin.indexpage.servicess.create');
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
            $filePath = $file->storeAs('storage/', $fileName, 'public');
        }

        // Create a new service
        $service = new Services();
        $service->name = $validatedData['name'];
        $service->heading = $validatedData['heading'];
        $service->description = $validatedData['description'];
        $service->image = $filePath ?? null; // Store file path or null
        $service->save();

        // Redirect with success message
        // return redirect()->back()->with('feedback', 'Service created successfully!');
        return redirect()->route('admin.indexpage.servicess.index')->with('feedback', 'Record added successfully!');

}


public function edit($id)
{
    // Find the schedule by ID
    $pageTitle="Update Schedule";

    $service = Services::findOrFail($id);
    
    // Return the edit view with the schedule data and statuses
    return view('admin.indexpage.servicess.create', compact('service', 'pageTitle'));
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

    // Find the service by ID
    $service = Services::findOrFail($id);

    // Handle file upload if a new image is provided
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads/services', $fileName, 'public');

        // Optionally delete the old image file
        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }

        $service->image = $filePath;
    }

    // Update the service attributes
    $service->name = $validatedData['name'];
    $service->heading = $validatedData['heading'];
    $service->description = $validatedData['description'];
    $service->save();

    // Redirect with success message
    return redirect()->route('admin.indexpage.servicess.index')->with('feedback', 'Record updated successfully!');
}


}

