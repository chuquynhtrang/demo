<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Cloudder;

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
            $filename = $request->avatar;
            // dd(Cloudder::getPublicId());
            Cloudder::upload($filename, config('common.path_cloud_avatar') . $user->email);
            $user->avatar = Cloudder::getResult()['url'];
        }

    	$request = $request->only('name', 'address', 'phone', 'email');
    	$user->save($request);

    	return redirect('/admin/profile/'.$user->id)->withSuccess('Update Profile Successfully');
    }
}
