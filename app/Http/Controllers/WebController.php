<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function index()
    {
        $events = Event::all();
        return view('web.home', compact("events"));
    }

    public function about()
    {
        return view('web.about');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function faq()
    {
        return view('web.faqs');
    }







    // Blog
    public function blog()
    {
        return view('web.blog.index');
    }






    // Bottom (Footer Links)
    public function privacy()
    {
        return view('web.bottom.privacy');
    }

    public function terms()
    {
        return view('web.bottom.terms');
    }


    public function cookie()
    {
        return view('web.bottom.cookie');
    }
}
