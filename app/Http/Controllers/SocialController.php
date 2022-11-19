<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;



class SocialController extends Controller
{

    public function LoginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function CallBack()
    {


        $googleUser = Socialite::driver('google')->user();

        $user = User::create([
            'google_id' => $googleUser->id,
        ], [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'github_token' => $googleUser->token,
            'github_refresh_token' => $googleUser->refreshToken,
        ]);

        Auth::login($user);
    }
}
