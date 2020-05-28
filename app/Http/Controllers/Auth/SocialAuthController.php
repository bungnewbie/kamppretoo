<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;
use Socialite;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $socialite = Socialite::driver($provider)->user();
            if ($user = $this->findOrCreate($provider, $socialite)) {
                Auth::login($user, true);
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    protected function findOrCreate($provider, $request)
    {
        $user = User::where('provider_name', $provider)->where('provider_id', $request->id)->first();

        if (!is_null($user)) return $user;

        // $avatar   = file_get_contents($request->avatar);
        // $filename = "{$request->id}.jpeg";

        // Storage::put("{$provider}/avatar/{$filename}", $avatar);

        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'provider_name'=> $provider,
            'provider_id'=> $request->id,
            'avatar' => $request->avatar,
            'url_token' => Uuid::uuid4()->getHex()
        ]);
    }
}
