<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (count($request->all()) == 0) {
            $users = User::all();
            } else {
            $users = User::query();
            if ($request->filled('name')) {
            $users->where('name', 'like', '%' . $request->name . '%');
            }
            if ($request->filled('email')) {
            $users->where('email', 'like', '%' . $request->email . '%');
            }
            if ($request->filled('role')) {
            $users->where('role', $request->role);
            }
            $users=$users->get();
        }
        return view('users.list', compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;
        return view('users.add', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $fields = $request->validated();
        $user = new User;
        $user->fill($fields);
        $user->password = Hash::make('GamesMultimedia');
        if ($request->hasFile('photo')) {
        $photo_path = $request->file('photo')->store('public/users_photos');
        $user->photo = basename($photo_path);
        }
        $user->save();
        $user->sendEmailVerificationNotification();
        return redirect()->route('users.index')->with('success', 'User successfully created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
