<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\View\View;

class SchedulerController extends Controller
{

    /**
     * @throws AuthorizationException
     */
    public function show(): Application|View
    {
        $this->authorize('index',Company::class); //update to Scheduler policy

        return view('company.scheduler.index');
    }
}
