<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function leaveSystem(){
        return view('projects.leave_system');
    }
}
