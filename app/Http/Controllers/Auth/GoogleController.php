<?php 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            \Log::info('Received user:', ['user' => $user]);

            // dd($user);
            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('/dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'access_level'=> 'applicant',
                    'password' => encrypt('mdiiaudihy71628773e1&*^@&^')
                ]);

                Auth::login($newUser);
                return redirect()->intended('/');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function handleGoogleOneTap(Request $request)
    {
        // dd($request);
        // Validate the request to ensure the token is provided

        $request->validate([
            'token' => 'required|string',
        ]);

        $token = $request->input('token');
        // \Log::info('Received request:', ['request' => $request]);


        // $token = $request->input('token');

        try {
            // Use the token to retrieve the user's information
            $googleUser = Socialite::driver('google-one-tap')->userFromToken($token);

            //-----------------to rework as it need to add password column
            $user = User::firstOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'google_id' => $googleUser->getId(),
                    // 'access_level'=> 'applicant',
                    // 'password' => Hash::make($password),
                    // 'avatar' => $googleUser->getAvatar(),
                ]
            );

            // \Log::info('Received user:', ['user' => $user]);
            // Log in the user
            // auth()->login($user);
            Auth::login($user);

            // Return a response or redirect
            // return  redirect('/dashboard'); 
            // response()->json(['message' => 'Logged in successfully', 'user' => $user]);
            // Return success response with the redirect URL
            return response()->json([
                'success' => true,
                'redirect_url' => '/', // URL to redirect to after login
            ], 200);

        } catch (\Exception $e) {
            // Handle errors, e.g., invalid token
            return response()->json(['error' => 'Invalid token or user not found la'], 401);
        }
        
    }

    
}
