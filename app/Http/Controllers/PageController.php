<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('users.home');
    }
    public function users()
    {
        $users = User::all();
        return view('users.users', compact('users'));
    }
    public function addUser()
    {
        return view('users.addUser');
    }
    public function updateUser($id)
    {
        $user = User::findOrFail($id);
        return view('users.updateUser', compact('user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

        User::create($validated);

        return redirect()->route('users')->with('success', 'User Added Successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users')->with('success', 'User Deleted Successfully');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->update($validated);

        return redirect()->route('users')->with('success', 'User Updated Successfully');
    }
}
