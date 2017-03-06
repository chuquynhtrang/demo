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

        return view('admin.users.index', compact('users', 'role'));
    }

    public function create($role)
    {
        return view('admin.users.create', compact('role'));
    }

    public function store(Request $request, $role)
    {
        // dd($request->name);
        // $request = $request->only('name', 'email', 'address', 'phone', 'course', 'group');
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt('123456');
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->course_id = $request->course;
        $user->role = 0;
        $user->group_id = $request->group;
        $user->save();

        return redirect('/admin/users/'. $role . 'index')->withSuccess('Create User Successfully!');
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
