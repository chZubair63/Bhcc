<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\Slider;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        // Fetch all sliders from the database
        $sliders = Slider::all();
    
        // Return the view with the sliders data
        return view('admin.indexpage.slider.index', compact('sliders'));
    }



    public function create()
{
    // Return the view for creating a new slider
    return view('admin.indexpage.slider.create');
}

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
        $filePath = $file->storeAs('uploads/sliders', $fileName, 'public');
    }

    // Create a new slider
    $slider = new Slider();
    $slider->name = $validatedData['name'];
    $slider->description = $validatedData['description'];
    $slider->image = $filePath ?? null; // Store file path or null
    $slider->save();

    // Redirect with success message
    return redirect()->route('admin.indexpage.slider.index')->with('feedback', 'Slider created successfully!');
}

public function edit($id)
{
    // Find the slider by ID
    $pageTitle = "Update Slider";

    $slider = Slider::findOrFail($id);

    // Return the edit view with the slider data
    return view('admin.indexpage.slider.create', compact('slider', 'pageTitle'));
}

public function update(Request $request, $id)
{
    // Validate the request
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Optional image
    ]);

    // Find the slider by ID
    $slider = Slider::findOrFail($id);

    // Handle file upload if a new image is provided
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads/slider', $fileName, 'public');

        // Optionally delete the old image file
        if ($slider->image && Storage::disk('public')->exists($slider->image)) {
            Storage::disk('public')->delete($slider->image);
        }

        $slider->image = $filePath;
    }

    // Update the slider attributes
    $slider->name = $validatedData['name'];
    $slider->description = $validatedData['description'];
    $slider->save();

    // Redirect with success message
    return redirect()->route('admin.indexpage.slider.index')->with('feedback', 'Slider updated successfully!');
}


}
