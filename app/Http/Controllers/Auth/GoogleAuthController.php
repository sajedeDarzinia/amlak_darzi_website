<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect(): \Symfony\Component\HttpFoundation\RedirectResponse|\Illuminate\Http\RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(): \Illuminate\Routing\Redirector|string|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
            $googleUser=Socialite::driver('google')->user();
            $user=User::where('email',$googleUser->email)->first();

            if ($user){
                auth()->loginUsingId($user->id);
            }else{
                $newUser=User::create([
                   'name'=>$googleUser->name,
                    'email'=>$googleUser->email,
                   'password'=>bcrypt(Str::random(16)),

                ]);
                auth()->loginUsingId($newUser->id);
            }
            return redirect('/');

    }
}