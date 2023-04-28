<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getAllUsers(Request $request)
    {
        $users = User::query();

        if ($request->has('role')) {
            $users->where('role_id', $request->input('role'));
        }

        $users = $users->get();

//        return view('users.index', compact('users'));


//        $users = User::with('role')->get();
        return view('dashboard/user/users', compact('users'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function editUser(User $user)
    {
        $roles = Role::all();
        return view('dashboard.user.edit-user', compact('user', 'roles'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
