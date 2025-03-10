<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $blogs = Blog::where('is_published', true)
            ->orderBy('publish_date', 'desc')
            ->get();

        return view('web.blog.index', compact('blogs'));
    }

    /**
     * Display the specified blog.
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        // Get related blogs in the same category
        $relatedBlogs = Blog::where('category', $blog->category)
            ->where('id', '!=', $blog->id)
            ->where('is_published', true)
            ->orderBy('publish_date', 'desc')
            ->limit(3)
            ->get();

        return view('web.blog.single', compact('blog', 'relatedBlogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
