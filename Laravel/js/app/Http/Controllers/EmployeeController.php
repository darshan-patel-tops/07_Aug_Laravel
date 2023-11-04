<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('js');
    }
    public function all()
    {
        $employee = Employee::all();
        return response()->json($employee);
    }
    public function store(Request $request)
    {
        // dd($request);
        Employee::create([
            'name'=>$request->name,
            'city'=>$request->city,
            'salary'=>$request->salary,
            'age'=>$request->age,
        ]);
        return response()->json('Successfully Added Employee');
    }
}
