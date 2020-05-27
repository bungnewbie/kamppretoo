<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    static public function getMessage()
    {
        return self::where('url_token', logged_in_user()->url_token)->latest()->paginate(9);
    }
}
