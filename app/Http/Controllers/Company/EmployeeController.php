<?php

namespace App\Http\Controllers\Company;

use App\Events\EmployeeCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\Company\Employee\StoreManualRequest;
use App\Http\Requests\Company\Employee\StoreRequest;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use League\Csv\Exception;
use League\Csv\Reader;
use League\Csv\UnavailableStream;

class EmployeeController extends Controller
{

    /**
     * @throws AuthorizationException
     */
    public function show(): Application|View
    {
        $this->authorize('index',Company::class); //update to Employee policy


        return view('company.employee.index');
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Application|View
    {
        $this->authorize('update',Company::class);

        return view('company.employee.add');
    }

    /**
     * @throws UnavailableStream
     * @throws AuthorizationException
     * @throws Exception
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $this->authorize('store',Company::class);

        DB::beginTransaction();

        try {
            $csv = Reader::createFromPath($request->file('file')->getRealPath())->setHeaderOffset(0);

            foreach ($csv->getRecords() as $record) {
                if (!isset($record['email'])) {
                    continue;
                }

                $user = $this->getEmployer($record);

                event(new EmployeeCreated($user));
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        return redirect()->route('company.dashboard');
    }

    public function storeManual(StoreManualRequest $request): RedirectResponse
    {
        $this->authorize('store',Company::class);

        DB::beginTransaction();

        try {
            $csv = Reader::createFromPath($request->file('file')->getRealPath())->setHeaderOffset(0);

            foreach ($csv->getRecords() as $record) {
                if (!isset($record['email'])) {
                    continue;
                }

                $user = $this->getEmployer($record);

                event(new EmployeeCreated($user));
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        return redirect()->route('company.dashboard');
    }

    /**
     * @param mixed $record
     * @return User
     */
    private function getEmployer(mixed $record): User
    {
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
        return $user;
    }

}
