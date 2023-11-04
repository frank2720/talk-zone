<?php

namespace App\Notifications;

use App\Models\Talk;
use Illuminate\support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewTalk extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Talk $talk)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject("New talk from {$this->talk->user->name}")
                    ->greeting("New talk from {$this->talk->user->name}")
                    ->line(Str::limit($this->talk->message, 50))
                    ->action('Go to talks', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
