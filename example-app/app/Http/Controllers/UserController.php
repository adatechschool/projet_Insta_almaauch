<?php

namespace App\Http\Controllers;
 
use App\Models\User;
 
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('users.show', [
            'user' => User::findOrFail($id)
        ]);
    }
}