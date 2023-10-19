<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.user.index',compact('users'));
    }
    public function edit($user_id)
    {
        $users = User::findOrFail($user_id);
        return view('admin.user.edit',compact('users'));
    }
    public function create()
    {
        // $users = User::paginate(10);
        return view('admin.user.create');
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role_as' => ['required','integer']
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_as' => $request->role_as
        ]);
        return redirect('/admin/users/')->with('message','User Created Successfully ');

    }
    public function update(Request $request,int $user_id)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role_as' => ['required','integer']
        ]);
        User::FindOrFail($user_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_as' => $request->role_as
        ]);
        return redirect('/admin/users/')->with('message','User Updated Successfully');

    }
    public function delete(int $user_id)
    {
        User::findOrFail($user_id)->delete();
        return redirect()->back()->with('message','User Deleted Successfully');

    }
}
