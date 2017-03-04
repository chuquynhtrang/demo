<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    public function index()
    {
    	$groups = Group::all();

    	return view('admin.groups.index', compact('groups'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:groups',
        ]);

        $group = new Group();
        $name = $request->only('name');
        $group->create($name);

        return redirect('/admin/groups')->withSuccess('Create Class Successfully!');
    }


    public function edit($id)
    {
        $group = Group::find($id);

        if (!$group) {
            return redirect('/admin/groups')
                ->withErrors(['message' => 'Not found class']);
        }

        return view('groups.edit')->with(
            [
                'group' => $group,
                'action' => url('/admin/groups/'. $group->id),
                'input' => '<input name="_method" type="hidden" value="PUT">',
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $group = Group::find($id);

        if (!$group) {
            return redirect('/admin/groups')
                ->withErrors(['message' => 'Not found class']);
        }

        $this->validate($request, [
            'name' => 'required|unique:groups',
        ]);

        $request = $request->only('name');
        $group->update($request);

        return redirect('/admin/groups')->withSuccess('Update Class Successfully!');
    }

    public function destroy($id)
    {
        $group = Group::find($id);

        if (!$group) {
            return redirect('/admin/groups')
                ->withErrors(['message' => 'Not found class']);
        }

        $group->delete();

        return redirect('/admin/groups')->withSuccess('Delete Class Successfully!');
    }
}
