<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Events\PageVisitEvent;
use Illuminate\Support\Facades\Event;
use App\Listeners\PageVisitEventListener;

class SiteControllerTest extends TestCase
{
    private function browseAndAssertEventOfPage(?string $page = null): void
    {
        Event::fake();

        $response = $this->get($page ?? '/');

        $response->assertOk()
            ->assertViewIs($page ?? 'home');

        Event::assertDispatched(PageVisitEvent::class);
        Event::assertListening(PageVisitEvent::class, PageVisitEventListener::class);

        // Event::assertDispatched(function (PageVisitEvent $event) {
        //     $event->page_name === ucfirst($page ?? 'Home');
        // });
    }

    public function test_application_home_page_works_as_expected(): void
    {
        $this->browseAndAssertEventOfPage();
    }

    public function test_application_about_page_works_as_expected(): void
    {
        $this->browseAndAssertEventOfPage('about');
    }

    public function test_application_articles_page_works_as_expected(): void
    {
        $this->browseAndAssertEventOfPage('articles');
    }
}
