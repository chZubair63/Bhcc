<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function aboutUs()
    {
        return view('website.screens.aboutus');
    }

    public function departments()
    {
        return view('website.screens.departments');
    }

    public function ourdoctors()
    {
        // Fetch all doctors from the database
        $doctors = Doctor::all();

        // Return the view with doctors data
        return view('website.screens.ourdoctors', compact('doctors'));
    }

    public function appointment()
    {
        return view('website.screens.appointment');
    }
    public function ourservices()
    {
        return view('website.screens.ourservices');
    }

    // public function doctorProfile()
    // {
    //     $doctors = Doctor::all(); // Fetch data from your database
    //     return view('website.screens.doctorprofile', compact('doctors'));
    // }

    public function departmenttype()
    {
        return view('website.screens.departmenttype');
    }

    public function contactus()
    {
        return view('website.screens.contactus');
    }

    public function privicypolicy()
    {
        return view('website.screens.privicypolicy');
    }

    public function blogs()
    {
        return view('website.screens.blogs');
    }

    public function doctortimetable()
    {
        return view('website.screens.doctortimetable');
    }


    public function doctorProfile($id)
    {
        $doctor = Doctor::where('id', $id)->first();

        return view('website.screens.doctorprofile', compact('doctor'));
    }
}
