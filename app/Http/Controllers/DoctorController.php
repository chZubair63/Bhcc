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
        //dd($request);
        $doctor = Doctor::where('id', $request->id)->first();
        $message = 'Doctor is updated successfully';

        if (!$doctor) {
            $doctor = new Doctor;
            $message = 'Course is created successfully';
        }

        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('storage/assets/images/doctor', $name);
            $doctor->image = $name; // Corrected from $center->image
        }
        $doctor->name = $request->name;
        $doctor->description = $request->description;
        $doctor->education_training = $request->education_training;
        $doctor->degrees = $request->degrees;
        $doctor->area_of_expertise = $request->area_of_expertise;
        $doctor->languages = $request->languages;
        $doctor->work_days = $request->work_days;
        $doctor->diploma_certifcate = $request->diploma_certifcate;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->save();

        return redirect()->route('doctors.index')->with('feedback', $message);
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

        $doctor = Doctor::findOrFail($id); // Fetch the doctor by ID

        $doctor->name = $request->input('name');

        if ($request->hasFile('image')) {
            if ($doctor->image && Storage::exists('public/' . $doctor->image)) {
                Storage::delete('public/' . $doctor->image);
            }

            // Upload the new image and save the path
            $imagePath = $request->file('image')->store('doctors', 'public');
            $doctor->image = $imagePath;
        }

        // Save the updated doctor record
        $doctor->save();

        // Redirect to the index page with a success message
        return redirect()->route('doctors.index')->with('feedback', 'Doctor record updated successfully!');
    }


    public function getPhoneAttribute($value)
    {
        return $value ? $value : 'No phone number available';
    }
}
