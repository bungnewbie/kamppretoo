<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = DB::table('send_messages')->where('user_id', Auth::user()->id)->get();
        return view('home', compact('messages'));
    }
}
