<?php

namespace Tests\Integration\Http\Controllers\Auth;

 use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function registerStepOneReturnTheCorrectView(): void
    {
        $response = $this->get(route('register.one'));

        $response->assertViewIs('auth.register-company-details');
    }

    /**
     * @test
     */
    public function registerStepTwoReturnsTheCorrectView(): void
    {
        session()->put('company_details', ['name'=> 'Lorem ipsum']);
        $response = $this->get(route('register.two'));

        $response->assertViewIs('auth.register-company-personal-details');
    }
}
