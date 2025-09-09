<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogsController extends Controller
{
    /**
     * Display a listing of the blogs.
     */
    public function index()
    {
        // $blogs = Blogs::paginate(6);
        $blogs = Blogs::latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new blog.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created blog in storage.
     */
    public function store(Request $request)
    {
     // dd($request->all());
    
        $request->validate([
            'title' => 'string',
            // 'short_description' => 'string',
            // 'description' => 'nullable|string',
            'blog_date' => 'required',
            'image' => 'nullable|image'
        ]);

        $data = $request->all();

        // Image upload
        if ($file = $request->file('image')) {
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move('storage/assets/images/blogs/', $name);
            $data['image'] = $name;
        }

        Blogs::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }

    /**
     * Display the specified blog.
     */
    public function show(Blogs $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified blog.
     */
    public function edit($blog)
    {
     $blog=Blogs::find($blog);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified blog in storage.
     */
public function update(Request $request, $id)
{
    $blog = Blogs::find($id);

    if (!$blog) {
        return redirect()->back()->with('error', 'Blog not found.');
    }

    // Updating manually
    $blog->title = $request->title;
    $blog->short_description = $request->short_description;
    $blog->description = $request->description;
    $blog->blog_date = $request->blog_date;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = time() . '_' . $file->getClientOriginalName();
        $file->move('storage/assets/images/blogs/', $name);
        $blog->image = $name;
    }

    $blog->save(); // Save manually

    return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully!');
}



    /**
     * Remove the specified blog from storage.
     */
 public function destroy($id)
{
    $blog = Blogs::findOrFail($id); // Retrieve the blog instance

    if ($blog->image) {
        $oldImagePath = public_path('storage/assets/images/blogs/' . $blog->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
    }

    $blog->delete();

    return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully!');
}

}
