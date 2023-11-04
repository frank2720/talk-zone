<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\TalkCreated;
use App\Notifications\NewTalk;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendTalkCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TalkCreated $event): void
    {
        foreach (User::whereNot('id', $event->talk->user_id)->cursor() as $user) {
            $user->notify(new NewTalk($event->talk));
        }
    }
}
