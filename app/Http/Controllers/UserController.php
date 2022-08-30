<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $users;
    private $user;
    public function add ()
    {
        return view('admin.user.add');
    }

    public function create(Request $request)
    {
        User::createUser($request);
        return redirect('/add-user')->with('message', 'User created successfully');
    }

    public function manage ()
    {
        $this->users = User::all();
        return view('admin.user.manage', [
            'users' => $this->users,
        ]);
    }


    public function edit($id)
    {
        $this->user = User::find($id);
        return view('admin.user.edit', [
            'user' => $this->user,
        ]);
    }

    public function update(Request $request, $id)
    {
        User::updateUser($request, $id);
        return redirect('/manage-user')->with('message', 'User updated successfully');

    }

    public function delete($id)
    {
        User::deleteUser($id);
        return redirect('/manage-user')->with('message', 'User deleted successfully');

    }
}
