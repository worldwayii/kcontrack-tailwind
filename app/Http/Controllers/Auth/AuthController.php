<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StepOneRequest;
use App\Http\Requests\Auth\StepTwoRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    public function login() : View
    {
        return view('auth.login');
    }

    public function postLogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Auth::attempt($credentials);

        if ($user->can('view', Company::class)) {
            return redirect()->route('company.dashboard');
        } else {
            return redirect()->route('login')->with('error', 'You do not have the necessary role.');
        }
    }

    public function registerStepOne() : View
    {
        return view('auth.register-company-details');
    }

    public function postStepOne(StepOneRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        if(!empty($validatedData)){
            Session::put('company_details', $validatedData);
        }

        return redirect()->route('register.two');
    }

    public function registerStepTwo(): View|RedirectResponse
    {
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
        try {

            DB::beginTransaction();

            $validatedData = $request->validated();

            $user = User::create([
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
            ]);

            $validatedData = array_merge($validatedData, session()->get('company_details'));
            $validatedData['user_id'] = $user->id;

            $companyRole = Role::where('name', 'company')->first();
            $user->assignRole($companyRole);

            Company::create($validatedData);

            DB::commit();

            //create an email for account
            $user->sendEmailVerificationNotification();

            session()->forget('company_details');

            return view('auth.confirm-email');
        }catch (\Exception $e) {
            DB::rollback();
            return redirect()->back();
        }
    }

    public function verifyEmail(EmailVerificationRequest $request): View
    {
        $request->fulfill();

        return view('auth.email-verified');
    }

    public function sendVerification(Request $request): RedirectResponse
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    }
}
