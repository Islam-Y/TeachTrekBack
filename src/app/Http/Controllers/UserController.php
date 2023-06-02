<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('main.users_list', ['users' => $users, 'title' => 'Users']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);
        $user = new User;
        $user->email = $request->email;

        $hashed_password = Hash::make($request->password);
        $user->password = $hashed_password;
        $user->save();

        // TODO: Add redirection page
        return redirect('');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $user = User::where('id', $id)->first();

        return view('main.user_profile', [
            'title' => $user,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $request->validate([
            "password" => "required"
        ]);
        $email = $user->email;
        $cur_user = User::all()->find($email);
        $hashed_password = Hash::make($request->password);

        // TODO: Look at password warning
        $cur_user->password = $hashed_password;
        $cur_user->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
    }
}
