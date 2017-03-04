<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Cloudder;

class UserController extends Controller
{
    public function index($role)
    {
        $users = User::where('role', $role)->get();

        return view('admin.users.index', compact('users'));
    }

    public function profile(User $user)
    {
    	return view('users.profile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
    	$user = User::findOrFail($id);

    	if ($request->hasFile('avatar')) {
            $filename = $request->avatar;
            Cloudder::upload($filename, config('common.path_cloud_avatar') . $user->email);
            $user->avatar = Cloudder::getResult()['url'];
        }

    	$request = $request->only('name', 'address', 'phone', 'email');
    	$user->save($request);

    	return redirect('/admin/profile/'.$user->id)->withSuccess('Update Profile Successfully');
    }
}
