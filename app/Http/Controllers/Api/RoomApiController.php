<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomApiController extends Controller
{

    public function index()
    {
        return Room::all();
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {
        return $request;
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Request $request)
    {
        $request->delete();
        return "deleted room";
    }
}
