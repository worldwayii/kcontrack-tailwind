<?php

namespace Tests\Integration\Http\Controllers\Auth;

 use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @group tt
     */
    public function registerStepOneReturnTheCorrectView(): void
    {
        $response = $this->get(route('register.one'));

        $response->assertViewIs('auth.register-company-details');
    }

}
