<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Group;
use App\Models\Room;
use App\Models\Stage;
use App\Models\Teacher;
use Illuminate\Http\Request;

class GroupController extends Controller
{
  
    public function index()
    {
        return view('group.index')->with([
            'groups'=> Group::all(),
        ]);
    }

    public function create()
    {
        return view('group.create')->with([
            'teachers'=>Teacher::all(),
            'courses'=>Course::all(),
            'rooms'=>Room::all(),
        ]);
    }

    public function store(Request $request)
    {
        $group = Group::create([
            'teacher_id'=>$request->teacher_id,
            'room_id'=>$request->room_id,
            'course_id'=>$request->course_id,
            'stage_id'=>1,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'name'=>$request->name
        ]);
        return to_route('group.index');
    }

    public function show(Group $group)
    {
        return view('group.show')->with([
            'group'=>$group
        ]);
    }

    public function edit(Group $group)
    {
        return view('group.edit')->with([
            'group'=>$group
        ]);
    }

    public function update(Request $request, Group $group)
    {
        $group->update([
            'teacher_id'=>$request->teacher_id,
            'room_id'=>$request->room_id,
            'stage_id'=>$request->stage_id,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'name'=>$request->name
        ]);
        return to_route('group.show')->with([
            'group'=> $group->id
        ]);
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return back();
    }
}
