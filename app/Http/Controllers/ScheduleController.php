<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Status;


use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index() {
       
        $schedules = Schedule::all();
        return view('admin.indexpage.schedules.index', compact('schedules'));
    }
    
    public function create() {
        $schedule = new Schedule;
        $statuses = Status::all();
        $pageTitle="Created Schedule";

        

        return view('admin.indexpage.schedules.create' ,compact('statuses','schedule','pageTitle'));
    }
     
       
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'day' => 'required|string',
            'start_time' => 'required',
            'end_time' => 'required',
            'status_id' => 'required', // Assuming status_id is a boolean value (active/inactive)
        ]);
    
    
        Schedule::create($validated);

            // // Create a new record using the validated data
            // $schedule = new Schedule();
            // $schedule->title = $validatedData['title'];
            // $schedule->description = $validatedData['description'];
            // $schedule->day = $validatedData['day'];
            // $schedule->start_time = $validatedData['start_time'];
            // $schedule->end_time = $validatedData['end_time'];
            // $schedule->status_id = $validatedData['status_id'];
            // $schedule->save();
    
            // Redirect back with success message
            return redirect()->route('admin.indexpage.schedules.index')->with('feedback', 'Record added successfully!');
      


    }





    public function edit($id)
    {
        // Find the schedule by ID
        $pageTitle="Update Schedule";

        $schedule = Schedule::findOrFail($id);
        $statuses = Status::all(); // Get all statuses for the dropdown
        
        // Return the edit view with the schedule data and statuses
        return view('admin.indexpage.schedules.create', compact('schedule', 'statuses','pageTitle'));
    }


    public function update(Request $request, $id)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'day' => 'required|string',
            'start_time' => 'required',
            'end_time' => 'required',
            'status_id' => 'required', // Assuming status_id is a boolean value (active/inactive)
        ]);
    
        // Find the existing record by its ID
        $schedule = Schedule::findOrFail($id);
        $schedule->update($request->all());

      
    
        // Save the updated record
        $schedule->save();
    
        // Redirect back with a success message
        return redirect()->route('admin.indexpage.schedules.index')->with('feedback', 'Record updated successfully!');
    }
    


}
