<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // set index page view
    public function index() {
        return view('index');
    }
}
