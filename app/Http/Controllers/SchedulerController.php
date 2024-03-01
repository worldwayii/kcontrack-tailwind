<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchedulerController extends Controller
{
    public function index(){
        return view('schedulers.index');
    }

    public function publish(){
        return view('schedulers.publish');
    }
}
