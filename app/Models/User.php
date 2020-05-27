<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'avatar',
        'password',
        'url_token',
        'provider_id',
        'provider_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'avatar_url'
    ];

    static public function whereUrlToken($url)
    {
        return self::where('url_token', $url)->firstOrFail();
    }

    public function getAvatarUrlAttribute()
    {
        $filesystem = config('filesystems.default');

        if (is_null($this->avatar)) return "https://via.placeholder.com/155";

        return Storage::disk($filesystem)->url("{$this->provider_name}/avatar/{$this->avatar}");
    }
}
