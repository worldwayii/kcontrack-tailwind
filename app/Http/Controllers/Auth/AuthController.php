<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StepOneRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() : View
    {
        return view('auth.login');
    }

    public function registerStepOne() : View
    {
        return view('auth.register-company-details');
    }

    public function storeStepOne(StepOneRequest $request)
    {
        //get validated form details and save to session
    }

    public function registerStepTwo() : View
    {
        return view('auth.register-company-personal-details');
    }
}
