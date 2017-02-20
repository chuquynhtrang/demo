<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
    	$groups = Group::all();

    	return view('groups.index', compact('groups'));
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

        return redirect()->action('GroupController@index')->withSuccess('Create Group Successfully!');
    }


    public function edit($id)
    {
        $group = Group::find($id);

        if (!$group) {
            return redirect()->action('GroupController@index')
                ->withErrors(['message' => 'Not found group']);
        }

        return view('groups.edit')->with(
            [
                'group' => $group,
                'action' => url('/groups/'. $group->id),
                'input' => '<input name="_method" type="hidden" value="PUT">',
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $group = Group::find($id);

        if (!$group) {
            return redirect()->action('GroupController@index')
                ->withErrors(['message' => 'Not found group']);
        }

        $this->validate($request, [
            'name' => 'required|unique:groups',
        ]);

        $request = $request->only('name');
        $group->update($request);

        return redirect()->action('GroupController@index')->withSuccess('Update Group Successfully!');
    }

    public function destroy($id)
    {
        $group = Group::find($id);

        if (!$group) {
            return redirect()->action('GroupController@index')
                ->withErrors(['message' => 'Not found group']);
        }

        $group->delete();

        return redirect()->action('GroupController@index')->withSuccess('Delete Group Successfully!');
    }
}
