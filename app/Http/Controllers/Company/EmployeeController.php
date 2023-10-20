<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\Employee\StoreRequest;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use League\Csv\Reader;

class EmployeeController extends Controller
{
    public function create(): View
    {
        $this->authorize('update', Company::class);

        return view('company.employee.add');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $this->authorize('update', Company::class);

        $csv = Reader::createFromPath($request->file('file')->getRealPath())
            ->setHeaderOffset(0);
        dd($csv);

        foreach ($csv as $record) {
            if (!isset($record['email'])) {
                continue;
            }

            Invitation::create([
                'campaign_id' => $request->input('campaign_id'),
                'email' => $record['email'],
                'staff_number' => $record['staff_number'] ?? null,
            ]);
        }

        return redirect()->route('admin.campaigns.index');
    }

}
