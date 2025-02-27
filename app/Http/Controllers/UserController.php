<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('users.create', compact('users'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|string|',
        ]);
    
        User::create($validatedData);
    
        return redirect('/users')->with('success', 'User added successfully!');
    }

    public function edit(user $user)
    {
        $users = User::all();
        return view('users.edit', compact('user', 'users'));
    }

    public function update(Request $request, user $user)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|string|',
        ]);

        $user->update($validatedData);

        return redirect('/users')->with('success', 'user updated successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users')->with('success', 'user deleted successfully!');
    }
}
