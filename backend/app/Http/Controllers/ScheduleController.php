<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index() {
        $users=User::all();
        $hours=Schedule::all();
        foreach ($hours as $hour)
        {
            dump($hour->id);
        }
        return view('index', compact('users'));
    }
}
