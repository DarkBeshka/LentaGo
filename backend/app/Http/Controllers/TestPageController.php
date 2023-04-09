<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class TestPageController extends Controller
{
    public function test_page()
    {
        $schedule = Schedule::find(1);
        dd($schedule);
    }
}
