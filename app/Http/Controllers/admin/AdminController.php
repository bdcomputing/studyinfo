<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        return view("admin.dashboard.index");
    }
}
