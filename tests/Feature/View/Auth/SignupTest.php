<?php

namespace Tests\Feature\View\Auth;

use Tests\TestCase;

class SignupTest extends TestCase
{
    /**
     * A basic view test example.
     */
    public function test_it_can_render(): void
    {
        $contents = $this->view('auth.signup', [
            //
        ]);

        $contents->assertSee('');
    }
}
