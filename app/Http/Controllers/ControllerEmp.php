<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class ControllerEmp extends Controller
{
    function show()
    {
        $data =  Employee::all();
        return view('employee', ['employees' => $data]);

    }
    //
}
