<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Group;
use App\Models\Subject;
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
        $courses = Course::all();
        $groups = Group::all();
        $subjects = Subject::all();

        return view('admin.users.create', compact('role', 'courses', 'groups', 'subjects'));
    }

    public function store(Request $request, $role)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt('123456');
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->role = $role;
        $user->avatar = 'images/default.png';
        if ($role == 0) {
            $user->course_id = $request->course_id;
            $user->subject_id = $request->subject_id;
            $user->group_id = $request->group_id;
            $user->score = $request->score;
        } elseif ($role == 2) {
            $user->position = $request->position;
        }

        $user->save();

        return redirect('/admin/users/'. $role)->withSuccess('Create User Successfully!');
    }

    public function show($role, $id)
    {
        $user = User::find($id);

        return view('admin.users.show', compact('role', 'user'));
    }

    public function profile(User $user)
    {
    	return view('user.profile', compact('user'));
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
