<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        
        $blogs = Blog::all();

        return view('admin.indexpage.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.indexpage.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'description' => 'required|string|max:1000',
            'heading' => 'required|string|max:255',
            'image' => 'nullable|image',
        ]);

       

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('storage/', $fileName, 'public');        }


            $blog = new Blog;

            $blog->name = $request->name;
            $blog->description = $request->description;
            $blog->heading = $request->heading;
            $blog->image = $filePath ?? null;

        $blog->save();

        return redirect()->route('admin.indexpage.blogs.index')->with('success', 'Blog created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.indexpage.blogs.create', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'heading' => 'required|string|max:255',
            'image' => 'nullable|image',
        ]);

        // Find the blog entry by ID
        $blog = Blog::findOrFail($id);

        // Update fields with new values from the request
        $blog->name = $request->input('name');
        $blog->description = $request->input('description');
        $blog->heading = $request->input('heading');

        // Handle the image upload if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->image = $imagePath;
        }

        // Save the updated blog entry
        $blog->save();

        // Redirect back with a success message
        return redirect('blogs')->with('success', 'Blog updated successfully.');
    }


    
}
