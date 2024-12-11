<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Schedule;
use App\Models\Services;
use App\Models\Indextop;
use App\Models\Managingpartners;
use App\Models\Management;
use App\Models\Founder;
use App\Models\Corevalues;








use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $schedules =  Schedule::all();
        $indextops =   Indextop::all();




        return view('website.index'  ,compact('schedules','indextops'));
    }
    // public function aboutus(){

    //     return view ('aboutus');

    // }
    public function aboutUs()
{
 
    $managingpartners = Managingpartners ::all();
    $managements = Management ::all();
    $founders = Founder::all();
    $corevalues = Corevalues::all();
    
    return view('website.screens.aboutus', compact('managingpartners','managements','founders','corevalues'));
    
}
 

public function departmentss()
{
    $departments = Department::all();
    $schedules =  Schedule::all();

        // Return the view with the departments data
        return view('website.screens.departmentss', compact('departments','schedules'));
    
}



public function ourdoctors()
{
    return view('website.screens.ourdoctors');
}


public function appointment()
{
    return view('website.screens.appointment');
}

public function ourservices()


{
    $services = Services::all();

    // Pass the data to the view
    return view('website.screens.ourservices', compact('services'));
}


public function doctorprofile()
{
    return view('website.screens.doctorprofile');
}

public function departmenttype()
{
    return view('website.screens.departmenttype');
}

public function contactus(){
    return view('website.screens.contactus');
}


public function privicypolicy(){
    return view('website.screens.privicypolicy');
}
public function blogss(){
    return view('website.screens.blogss');
}


public function doctortimetable(){
    return view('website.screens.doctortimetable');
}

}
