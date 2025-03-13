<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class MessagesController extends Controller
{



    /**
     * Show success message page
     */
    public function success()
    {
        return view("web.messages.success");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "first_name" => "required|string|max:255",
            "last_name" => "required|string|max:255",
            "phone" => "required|string|max:20",
            "email" => "required|string|max:50",
            "message" => "required|string|max:1024",
            "agree_terms" => "required|boolean",
        ]);
        $data = [
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "phone" => $request->phone,
            "email" => $request->email,
            "message" => $request->message,
            "agree_terms" => $request->has('agree_terms'),
        ];
        Message::create($data);
        return Redirect::to(route('web.contact'))->with('success', "Message submitted successfully");
    }
}
