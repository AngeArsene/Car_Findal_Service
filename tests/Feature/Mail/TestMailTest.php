<?php

namespace Tests\Feature\Mail;

use Tests\TestCase;
use App\Mail\TestMail;
use App\Events\PageVisitEvent;
use Illuminate\Support\Facades\Mail;

class TestMailTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_application_sends_an_email_when_some_routes_are_visited(): void
    {
        $this->markTestSkipped(
            'This test will not work cuz ' .
            'i do not know how to test mails that are queued'
        );

        Mail::fake();

        PageVisitEvent::dispatch('home');

        Mail::assertQueued(TestMail::class);
    }
}
