<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Destination;
use App\Models\Event;
use App\Models\Program;
use App\Models\University;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        $destination_count = Destination::query()->count();
        $blog_count = Blog::query()->count();
        $events_count = Event::query()->count();
        $university_count = University::query()->count();
        $programs_count = Program::query()->count();
        $users_count = User::query()->count();

        return view("admin.dashboard.index", compact("destination_count", "users_count", "university_count", "programs_count", "blog_count", "events_count"));
    }
}
