<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Google_Client;


class GoogleController extends Controller
{

    public function handleGoogleCallback(Request $request)
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        // Check if the user already exists
        $user = User::where('email', $googleUser->email)->first();

        if (!$user) {
            // Create a new user
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'access_level' => 'user',
                'password' => bcrypt(uniqid()), // Random password
            ]);
        }

        // Log in the user
        Auth::login($user);

        return redirect('/dashboard');
    }

    public function handleGoogleOneTap(Request $request)
    {
        dd("test");
        $credential = $request->input('credential');


        // Verify the Google One Tap credential
        $client = new \Google_Client(['client_id' => env('GOOGLE_CLIENT_ID')]);
        $payload = $client->verifyIdToken($credential);

        if ($payload) {
            $googleUser = $payload;

            // Check if the user already exists
            $user = User::where('email', $googleUser['email'])->first();

            if (!$user) {
                // Create a new user
                $user = User::create([
                    'name' => $googleUser['name'],
                    'email' => $googleUser['email'],
                    'google_id' => $googleUser['sub'],
                    'access_level' => 'user',
                    'password' => bcrypt(uniqid()), // Random password
                ]);
            }

            // Log in the user
            Auth::login($user);

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid credential']);
        }
    }
        
}