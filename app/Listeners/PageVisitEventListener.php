<?php

namespace App\Listeners;

use App\Mail\TestMail;
use App\Events\PageVisitEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PageVisitEventListener implements ShouldQueue
{
    use InteractsWithQueue;

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
    public function handle(PageVisitEvent $event): void
    {
        Mail::to(fake()->unique()->safeEmail())->queue(new TestMail($event->page_name));
    }
}
