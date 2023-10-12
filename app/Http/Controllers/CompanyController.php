<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\View\View;

class CompanyController extends Controller
{
    public function index(): View
    {
        $this->authorize('index', Company::class);

        return view('company.dashboard.index');
    }

    public function show(): View
    {
        $this->authorize('read', Company::class);

        return view('company.dashboard.profile');
    }

    public function edit(): View
    {
        $this->authorize('update', Company::class);

        return view('company.dashboard.edit-profile');
    }
}
