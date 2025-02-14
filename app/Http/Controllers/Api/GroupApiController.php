<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupApiController extends Controller
{

    public function index()
    {
        return Group::all();
    }


    public function store(Request $request)
    {
        $group= Group::create([
            'name'=>$request->name,
            'duration'=>$request->duration,
            'price'=>$request->price,
            'knowladge'=>$request->knowladge
        ]);
        return back();
    }
    
    public function show(Group $group)
    {
        return $group;
    }

    public function update(Request $request,Group $group)
    {
        $group->update([
            'name'=>$request->name,
            'duration'=>$request->duration,
            'price'=>$request->price,
            'knowladge'=>$request->knowladge
        ]);
        return back();
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return to_route('course.index');
    }
}
