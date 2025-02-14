<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  
    public function index()
    {
        return view('room.index')->with([
            'rooms'=> Room::all(),
        ]);
    }

    public function create()
    {
        return view('room.create')->with([
            'groups'=> Group::all(),
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Room $room)
    {
        
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Request $request)
    {
        $request->delete();
        return back();
    }
}