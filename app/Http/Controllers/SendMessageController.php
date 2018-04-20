<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SendMessageController extends Controller
{
    public function index()
    {
        return view('msg.send');
    }

    public function store(Request $request)
    {
        $messages = SendMessage::create([
            'messages' => request('messages'),
            'user_id'  => Auth::user()->id,
        ]);
        return redirect()->back()->with('msg', 'Pesan anda berhasil di kirim');
    }

}
