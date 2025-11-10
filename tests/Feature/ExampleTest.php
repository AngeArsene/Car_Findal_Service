<?php

namespace Tests\Feature;

use Tests\TestCase;

final class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_application_returns_a_successful_response(): void
    {
        $response = $this->get('/up');

        $response->assertOk();
        $response->assertSeeText("Application up");
        $response->assertSeeText("HTTP request received.");

        $this->get('/')->assertOk();
    }
}
