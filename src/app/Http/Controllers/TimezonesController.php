<?php

namespace DtechTimezones\Timezones\App\Http\Controllers;

use App\Http\Controllers\Controller;

class TimezonesController extends Controller
{
    public function index()
    {
        $current_time = date('d/m/Y');

        return view('timezones::time', compact('current_time'));
    }
}