<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserStore;
use App\Http\Requests\User\UserUpdate;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::get();
        return view('admin.user.index', compact('users'));

    }


    public function create()
    {
        return view('admin.user.create');
    }


    public function store(UserStore $request)
    {
        User::create($request->all());
        return redirect()->route('users.index');
    }


    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }


    public function edit(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    public function update(UserUpdate $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.index');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
