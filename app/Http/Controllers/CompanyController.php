<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index(): View
    {
        $user = Auth::user()->load('company');

        $company = $user->company;

        return view('dashboard.index', compact('company'));
    }
}
