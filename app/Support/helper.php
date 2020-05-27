<?php

use Illuminate\Support\Facades\Auth;

if (! function_exists('logged_in_user')) {
    function logged_in_user()
    {
        return Auth::user();
    }

}
if (! function_exists('user_url')) {
    function user_url()
    {
        return (string)env('APP_URL').'/'.logged_in_user()->url_token;
    }
}

if (! function_exists('convert_date')) {
    function convert_date($date)
    {
        return date('d F, Y', strtotime($date));
    }
}

if (! function_exists('convert_time')) {
    function convert_time($time)
    {
        return date('H:i', strtotime($time));
    }
}
