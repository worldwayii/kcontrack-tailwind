<?php

namespace App\Http\Controllers\Company;

use App\Events\EmployeeCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\Company\Employee\StoreRequest;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use League\Csv\Reader;

class EmployeeController extends Controller
{
    public function create(): Application|View
    {
        $this->authorize('update', Company::class);

        return view('company.employee.add');
    }

    /**
     * @throws \League\Csv\UnavailableStream
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @throws \League\Csv\Exception
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $this->authorize('update', Company::class);

        DB::beginTransaction();

        try {
            $csv = Reader::createFromPath($request->file('file')->getRealPath())->setHeaderOffset(0);

            foreach ($csv->getRecords() as $record) {
                if (!isset($record['email'])) {
                    continue;
                }

                $user = User::createStaff($record['email']);


                Employee::create([
                    'company_id' => auth()->user()->company->id,
                    'user_id' => $user->id,
                    'first_name' => $record['first_name'] ?? null,
                    'last_name' => $record['last_name'] ?? null,
                    'staff_number' => $record['employee_ID'] ?? null,
                    'role' => $record['position_role'] ?? null,
                    'pay_rate' => $record['pay_rate'] ?? null,
                ]);

                event(new EmployeeCreated($user));
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        return redirect()->route('company.dashboard');
    }

}
