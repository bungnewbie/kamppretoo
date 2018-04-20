<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendMessage extends Model
{
    protected $fillable = ['messages', 'user_id'];
}
