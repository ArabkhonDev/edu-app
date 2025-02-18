<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Group;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  
    public function index()
    {
        return view('admin.room.index')->with([
            'rooms'=> Room::all(),
        ]);
    }

    public function create()
    {
        return view('admin.room.create')->with([
            'groups'=> Group::all(),
        ]);
    }

    public function store(Request $request)
    {
        $room = Room::create([
            'group_id'=>$request->group_id,
            'name'=>$request->name
        ]);
    }

    public function show(Room $room)
    {
        return view('admin.room.show')->with([
            'room'=>$room,
        ]);
    }

    public function edit(Room $room)
    {
        return view('admin.room.edit')->with([
            'room'=>$room
        ]);
    }

    public function update(Request $request, Room $room)
    {
        $room->update([
            'group_id'=>$request->group_id,
            'name'=>$request->name
        ]);
        return redirect()->route('rooms.index');
    }

    public function destroy(Request $request)
    {
        $request->delete();
        return back();
    }
}