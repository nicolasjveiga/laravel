<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users= User::paginate();

        return view('users.index', compact('users'));
    }

    public function create(Request $request)
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());

        return redirect()
            ->route('users.index')
            ->with('success', 'User created successfully.');
    }

    public function edit(string $id, Request $request)
    {
        if(! $user = User::find($id)) {
            return redirect()
                ->route('users.index')
                ->with('error', 'User not found.');
        }

        return view('users.edit', compact('user'));
    }

    public function update(string $id, Request $request)
    {
        if(! $user = User::find($id)) {
            return redirect()
                ->route('users.index')
                ->with('error', 'User not found.');
        }

        $user->update($request->all());

        return redirect()
            ->route('users.index')
            ->with('success', 'User updated successfully.');
    }
}
