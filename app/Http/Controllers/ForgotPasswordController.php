<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    /**
     * Display the password reset request form.
     *
     * @return \Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    /**
     * Send a password reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'No account found with this email.']);
        }

        // Send the default password reset notification
        $user->sendPasswordResetNotification(
            Password::createToken($user)
        );

        return view('auth.passwords.check');
    }

    /**
     * Display the password reset form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $token
     * @return \Illuminate\View\View
     */
    public function showResetForm(Request $request, $token = null)
    {
        if (!$token) {
            return redirect()->route('password.request')->withErrors(['token' => 'Invalid or missing token.']);
        }

        $email = $request->input('email');
        if (!$email) {
            return redirect()->route('password.request')->withErrors(['email' => 'Email address is required.']);
        }

        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $email]
        );
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required',
        ]);

        $response = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );

        if ($response === Password::PASSWORD_RESET) {
            return view('auth.passwords.done');
        } else {
            return redirect()->back()->withErrors(['email' => 'Unable to reset password.']);
        }
    }
}