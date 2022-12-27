<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // set index page view
    public function index() {
        return view('index');
    }

    // handle insert a new employee ajax request
    public function store(Request $request) {

        $file = $request->file('avatar');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);

        $empData = ['first_name' => $request->fname, 'last_name' => $request->lname, 'email' => $request->email, 'phone' => $request->phone, 'post' => $request->post, 'avatar' => $fileName];
        Employee::create($empData);
        return response()->json([
            'status' => 200,
        ]);
    }
}
