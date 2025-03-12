<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Destination;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        $destination_count = Destination::query()->count();

        return view("admin.dashboard.index", compact("destination_count"));
    }
}
