<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
    // public function aboutus(){

    //     return view ('aboutus');

    // }
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
    return view('website.screens.ourdoctors');
}


public function appointment()
{
    return view('website.screens.appointment');
}

public function ourservices()


{
    return view('website.screens.ourservices');
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
public function blogs(){
    return view('website.screens.blogs');
}


public function doctortimetable(){
    return view('website.screens.doctortimetable');
}

}
