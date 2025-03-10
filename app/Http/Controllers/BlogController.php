<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function list(): View
    {
        return view("web.blog.list-blogs");
    }
}
