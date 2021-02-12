<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GithubAuthController extends Controller
{
    public function auth()
    {
        // send user request to github
        return Socialite::driver('github')->redirect();
    }

    public function redirect()
    {
        // get request back from github
        $user = Socialite::driver('github')->stateless()->user();
        $user = User::firstOrCreate([
            'email' => $user->email
        ], [
            'name' => $user->name,
            'password' => Hash::make(Str::random(24))
        ]);

        Auth::login($user);
        return redirect()->route('home');
    }
}
