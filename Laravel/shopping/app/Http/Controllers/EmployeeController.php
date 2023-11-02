<?php

namespace App\Http\Controllers;

use App\Models\Employee;
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
    public function add(Request $request)
    {
        // dd($request);
        // echo $request;
        // print_r($request);
        // $data = json_decode($request);
        // echo $data;
        Employee::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'department'=>$request->department,
            'city'=>$request->city,
            'salary'=>$request->salary,
            'image'=>time(),
            'documents'=>time(),
        ]);
        return response()->json("success");
        // dd($request);
    }
}
