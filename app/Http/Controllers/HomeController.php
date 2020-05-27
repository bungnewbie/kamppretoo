<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('form', 'send');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'messages' => Message::getMessage()
        ]);
    }

    public function form($url)
    {
        return view('form', [
            'user' => User::whereUrlToken($url)
        ]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'message' => ['required', 'min:5', 'max:225', 'string'],
        ]);

        Message::create([
            'message' => $request->message,
            'url_token' => $request->path()
        ]);

        session()->flash('notice', 'Your message was sent privately');
        return redirect()->back();
    }
}
