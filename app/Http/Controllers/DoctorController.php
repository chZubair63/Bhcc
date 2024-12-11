<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    // Show all doctor records in the index page
    public function index()
    {
        // Fetch all doctor records
        $doctors = Doctor::all(); // Using Eloquent Model
        return view('admin.indexpage.doctors.index', compact('doctors')); // Pass the data to the view
    }

    // Show the create form for a new doctor
    public function create()
    {
        return view('admin.indexpage.doctors.create'); // Return the create view
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image',
            'description' => 'required|string|max:1000',
            'education_training' => 'required|string|max:255',
            'degrees' => 'required|string|max:255',
            'area_of_expertise' => 'required|string|max:255',
            'languages' => 'required|string|max:50',
            'work_days' =>  'required|string|max:100',
            'diploma_certifcate' => 'required|string|max:100',
            'email' => 'required|string|max:50',
            'phone' => 'required|string|max:20',



        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('doctors', 'public'); // Store the image in 'doctors' folder in public disk
        }

        Doctor::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'education_training' => $request->input('education_training'),
            'degrees' => $request->input('degrees'),
            'area_of_expertise' => $request->input('area_of_expertise'),
            'languages' => $request->input('languages'),
            'work_days' => $request->input('work_days'),
            'diploma_certifcate' => $request->input('diploma_certifcate'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),


            'image' => $imagePath, // Store the image path
        ]);

        return redirect()->route('doctors.index')->with('feedback', 'Doctor record added successfully!');
    }

    public function edit($id)
    {

        $doctor = Doctor::findOrFail($id); // Fetch the doctor by ID
        return view('admin.indexpage.doctors.create', compact('doctor')); // Return the edit view with doctor data
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'education_training' => 'required|string|max:255',
            'degrees' => 'required|string|max:255',
            'area_of_expertise' => 'required|string|max:255',
            'languages' => 'required|string|max:50',
            'work_days' =>  'required|string|max:100',
            'diploma_certifcate' => 'required|string|max:100',
            'email' => 'required|string|max:50',
            'phone' => 'required|string|max:20',
            'image' => 'nullable|image',
        ]);
    
        $doctor = Doctor::findOrFail($id);
    
        // Update fields
        $doctor->fill($request->only([
            'name', 
            'description', 
            'education_training', 
            'degrees', 
            'area_of_expertise', 
            'languages', 
            'work_days', 
            'diploma_certifcate', 
            'email', 
            'phone'
        ]));
    
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($doctor->image && Storage::exists('public/' . $doctor->image)) {
                Storage::delete('public/' . $doctor->image);
            }
            // Store new image
            $doctor->image = $request->file('image')->store('doctors', 'public');
        }
    
        $doctor->save();
    
        return redirect()->route('doctors.index')->with('feedback', 'Doctor record updated successfully!');
    }
    


    public function getPhoneAttribute($value)
    {
        return $value ? $value : 'No phone number available';
    }
}
