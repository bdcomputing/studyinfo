<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class AdminMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all Messages
        $messages = Message::query()->paginate(10);
        return view("admin.messages.index", compact('messages'));
    }



    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        return view("admin.messages.show", compact('message'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        // Delete Message
        $message->delete();
        return redirect(route("admin.messages.index"))->with("success", "Message delete successfully!");
    }
}
