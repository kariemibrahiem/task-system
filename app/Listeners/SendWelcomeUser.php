<?php

namespace App\Listeners;

use App\Events\WelcomeUser;
use App\Mail\ContactMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeUser
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
    public function handle(WelcomeUser $event ): void
    {
        Mail::to($event->user->email)->send( new ContactMail($event->user));
        // $event->user->type_user = 1;
        // $event->user->save();

    }
}
