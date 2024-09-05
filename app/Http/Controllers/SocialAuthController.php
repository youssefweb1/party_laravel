<?php
namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class SocialAuthController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the callback from Google.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $existingUser = User::where('email', $user->getEmail())->first();
            
            if ($existingUser) {
                Auth::login($existingUser);
            } else {
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'avatar' => $user->getAvatar(),
                    'password' => bcrypt(str_random(16)),
                ]);

                Auth::login($newUser);
            }

            return redirect('/');
        } catch (Exception $e) {
            return redirect('/login')->withErrors('An error occurred during Google login.');
        }
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Handle the callback from Facebook.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            // Implement user creation/login logic similar to Google callback
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/login')->withErrors('An error occurred during Facebook login.');
        }
    }

    /**
     * Redirect the user to the Twitter authentication page.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Handle the callback from Twitter.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleTwitterCallback()
    {
        try {
            $user = Socialite::driver('twitter')->user();
            $existingUser = User::where('email', $user->getEmail())->first();
            
            if ($existingUser) {
                Auth::login($existingUser);
            } else {
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'twitter_id' => $user->getId(),
                    'avatar' => $user->getAvatar(),
                    'password' => bcrypt(str_random(16)),
                ]);

                Auth::login($newUser);
            }

            return redirect('/');
        } catch (Exception $e) {
            return redirect('/login')->withErrors('An error occurred during Twitter login.');
        }
    }
}