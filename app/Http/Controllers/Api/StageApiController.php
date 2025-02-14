<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Stage;
use Illuminate\Http\Request;

class StageApiController extends Controller
{

    public function index()
    {
        return Stage::all();
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
        return "deleted stage";
    }
}
