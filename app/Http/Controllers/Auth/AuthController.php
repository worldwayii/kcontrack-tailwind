<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StepOneRequest;
use App\Http\Requests\Auth\StepTwoRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

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

    public function postStepOne(StepOneRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        // Add to session with key name of company_details
        Session::put('company_details', $validatedData);

        return redirect()->route('register.two');
    }

    public function registerStepTwo()
    {
        // Check if the 'company_details' session variable exists
        if (!session()->has('company_details')) {
            return redirect()->route('register.one');
        }
        return view('auth.register-company-personal-details');
    }

    public function postStepTwo(StepTwoRequest $request)
    {
        if (!session()->has('company_details')) {
            return redirect()->route('register.one');
        }

        dd($request->validated());
        //get validated form details and save to session
        //get the validated request data
        //save the user bits to user table, assign company role with spatie roles
        //send the company data to company model create($validated)

        // Get the validated form details
        $validatedData = $request->validated();

        // Create a new user in the user table
        $user = User::create([
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Assign the 'company' role using Spatie Roles
        $companyRole = Role::where('name', 'company')->first();
        $user->assignRole($companyRole);

        // Create a new company in the company model
        Company::create($validatedData['company_details']);

        // Clear the 'company_details' session variable
        session()->forget('company_details');

        // Redirect to a success page or the next step
        return redirect()->route('your.success.route');
    }
}
