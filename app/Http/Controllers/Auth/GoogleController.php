<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller; // Add this line

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            // Get the user's information from Google
            $googleUser = Socialite::driver('google')->user();

            // Check if the user exists in your database
            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                // Create a new user if they don't exist
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                ]);
            }

            // Log the user in
            Auth::login($user);

            return redirect()->route('layout'); // Redirect to the home page or wherever you need

        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Something went wrong. Please try again.');
        }
    }
}
