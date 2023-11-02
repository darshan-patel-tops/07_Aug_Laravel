<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('Employee.index');
    }
    public function create()
    {
        return view('Employee.create');
    }
}
