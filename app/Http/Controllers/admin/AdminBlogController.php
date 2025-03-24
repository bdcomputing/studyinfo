<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;


class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $blogs = Blog::query()->paginate(2);
        return view('admin.blog.index', ["blogs" => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = ["Scholarships & Financial Aid ", "Visa & Immigration", "Study Destinations", "Admission & Application Tips", "University Guides"];
        return view("admin.blog.create", ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'category' => 'required|string',
            'publish_date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'sometimes|boolean'
        ]);

        $data = $request->except('image');

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // Store in public disk instead of private
            $uploadedImage = $request->file('image')->storeOnCloudinary('blogs');
            // get secure path from cloudinary
            $data['image_url'] = $uploadedImage->getSecurePath();
            $data['image_public_id'] = $uploadedImage->getPublicId();
        }

        // Generate slug with timestamp
        $data['slug'] = Str::slug($request->title) . '-' . time();

        // Set published status
        $data['is_published'] = $request->has('is_published');

        Blog::create($data);

        return redirect()->route('admin.blog')
            ->with('success', 'Blog post created successfully.');
    }

    /**
     * Display the specified blog.
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified blog.
     */
    public function edit(Blog $blog)
    {
        $categories = ["Scholarships & Financial Aid ", "Visa & Immigration", "Study Destinations", "Admission & Application Tips", "University Guides"];
        return view('admin.blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified blog in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'category' => 'required|string',
            'publish_date' => 'required|date',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'sometimes|boolean'
        ]);

        $data = $request->except('image');

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete old image
            if ($blog->image_public_id) {
                Cloudinary::destroy($blog->image_public_id);
            }

            // Store new image
            $image = $request->file('image')->storeOnCloudinary('blogs');
            $data['image_url'] = $image->getSecurePath();
            $data['image_public_id'] = $image->getPublicId();
        }

        // Update slug if title has changed
        if ($request->title !== $blog->title) {
            $data['slug'] = Str::slug($request->title) . "-" . time();
        }

        // Set published status
        $data['is_published'] = $request->has('is_published');

        $blog->update($data);

        return redirect()->route('admin.blog')
            ->with('success', 'Blog post updated successfully.');
    }

    /**
     * Remove the specified blog from storage.
     */
    public function destroy(Blog $blog)
    {
        // Delete image
        if ($blog->image_public_id) {
            Cloudinary::destroy($blog->image_public_id);
        }

        $blog->delete();

        return redirect()->route('admin.blog')
            ->with('success', 'Blog post deleted successfully.');
    }
}
