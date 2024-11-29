<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        // Fetch all departments from the database
        $departments = Department::all();

        // Return the view with the departments data
        return view('admin.indexpage.departments.index', compact('departments'));
    }
    public function create()
    {
        return view('admin.indexpage.departments.create');
    }




    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'discription' => 'required|string|max:1000',
        ]);
    
        Department::create($validated);
    
        // Redirect using the correct route name
        return redirect()->route('admin.indexpage.departments.index')->with('feedback', 'Department added successfully!');
    }





    public function edit($id)
{
    // Find the department by ID
    $department = Department::findOrFail($id);

    // Return the edit view with the department data
    return view('admin.indexpage.departments.create', compact('department'));



}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'discription' => 'required',
    ]);

    $department = Department::findOrFail($id);
    $department->update($request->all());

    return redirect()->route('admin.indexpage.departments.index')->with('feedback', 'Department updated successfully!');
}


    
}
