<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $users = new Users;
        $users->name = request()->input('name');
        $users->email = request()->input('email');
        $users->email_verified_at = request()->input('email_verified_at');
        $users->password = request()->input('password');
        $users->level = request()->input('level');
        $users->remember_token = request()->input('remember_token');
        $users->save();

        return redirect()->route('users.index');
    }

    public function update($id)
    {
        $users = new Users;
        $users->name = request()->input('name');
        $users->email = request()->input('email');
        $users->email_verified_at = request()->input('email_verified_at');
        $users->password = request()->input('password');
        $users->level = request()->input('level');
        $users->remember_token = request()->input('remember_token');
        $users->save();
       
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $users = Users::find($id);
        return view('users.edit', compact('users'));
    }

    public function destroy($id)
    {
        $users = Users::find($id);

        if($users){
            $users->delete();
            return redirect()->route('users.index');
        }

    }

}