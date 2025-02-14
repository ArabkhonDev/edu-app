<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupApiController extends Controller
{

    public function index()
    {
        return Group::limit(10)->get();
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Group $group)
    {
        return $group;
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return "deleted group";
    }
}
