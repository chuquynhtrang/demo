<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user)
    {
    	return view('users.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
    	$user = User::findOrFail($id);

    	if ($request->hasFile('avatar')) {
    		$avatar = $request->file('avatar');
            $filename = $avatar->getClientOriginalName();
            $request->file('avatar')->move(public_path() . '/uploads/avatar/', $filename);
            $user->avatar = $filename;
    	}

    	$request = $request->only('name', 'address', 'phone', 'email');
    	$user->save($request);

    	return redirect('/profile/'.$user->id)->withSuccess('Update Profile Successfully');
    }
}
