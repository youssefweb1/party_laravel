<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class PasswordResetMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $actionUrl;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param string $token
     */
    public function __construct(User $user, string $token)
    {
        $this->user = $user;
        $this->actionUrl = $this->generateActionUrl($token, $user->email);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('vendor.notifications.email')
            ->subject('Reset Password Notification')
            ->with([
                'greeting' => "Hello {$this->user->name}",
                'actionUrl' => $this->actionUrl,
                'actionText' => 'Reset Password',
                'level' => 'success',
                'introLines' => [
                    'You are receiving this email because we received a password reset request for your account.',
                ],
                'outroLines' => [
                    'If you did not request a password reset, no further action is required.',
                ],
            ]);
    }

    /**
     * Generate the action URL for password reset.
     *
     * @param string $token
     * @param string $email
     * @return string
     */
    private function generateActionUrl(string $token, string $email): string
    {
        return url(route('password.reset', [
            'token' => $token,
            'email' => $email
        ], false));
    }
}