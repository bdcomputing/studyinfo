<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
     
    public function index()
    {
        return view('web.home');
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

    // Admissions
    public function admissions()
    {
        return view('web.admissions');
    }

    public function apply()
    {
        return view('web.apply');
    }


    // Programs
    public function programs()
    {
        return view('web.programs.all');
    }

    public function ict()
    {
        return view('web.programs.ict');
    }

    public function nursing()
    {
        return view('web.programs.nursing');
    }

    public function hospitality()
    {
        return view('web.programs.hospitality');
    }
    public function business()
    {
        return view('web.programs.business');
    }
    public function shortcourses()
    {
        return view('web.programs.shortcourses');
    }

    public function mechEngineering()
    {
        return view('web.programs.mech-engineering');
    }

    // About
    public function faculty()
    {
        return view('web.about.faculty');
    }

    public function mission()
    {
        return view('web.about.mission');
    }

    public function partnership()
    {
        return view('web.about.partnerships');
    }

    public function success()
    {
        return view('web.about.success-stories');
    }
    public function careers()
    {
        return view('web.about.careers');
    }
    public function news()
    {
        return view('web.about.news');
    }
    public function events()
    {
        return view('web.about.events');
    }
    public function gallery()
    {
        return view('web.about.gallery');
    }
    public function blog()
    {
        return view('web.about.blog');
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
