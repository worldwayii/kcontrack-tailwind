<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\UpdateRequest;
use App\Models\Company;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;

class CompanyController extends Controller
{
    /**
     * @throws AuthorizationException
     */
    public function index(): View
    {
        $this->authorize('index', Company::class);

        return view('company.dashboard.index');
    }

    /**
     * @throws AuthorizationException
     */
    public function show(): View
    {
        $this->authorize('read', Company::class);

        return view('company.dashboard.profile');
    }

    /**
     * @throws AuthorizationException
     */
    public function edit(): View
    {
        $this->authorize('update', Company::class);

        return view('company.dashboard.edit-profile');
    }

    /**
     * @throws AuthorizationException
     */
    public function update(UpdateRequest $request)
    {
        $this->authorize('update', Company::class);

        $validatedData = $request->validated();

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('company/profile', 'public');
            $validatedData['logo'] = $logoPath;
        }

        $validatedDataWithoutEmail = Arr::except($validatedData, 'email');

        $company = Company::findOrFail(auth()->user()->company->id);

        $company->update($validatedDataWithoutEmail);

        return redirect(route('company.profile'))->with('success', 'Profile updated!');
    }

    public function addEmployer()
    {
        $this->authorize('update', Company::class);

        return view('company.employee.add-csv');
    }
}
