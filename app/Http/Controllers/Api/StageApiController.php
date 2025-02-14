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

    public function show(Stage $stage)
    {
        return $stage;
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Stage $stage)
    {
        $stage->delete();
        return "deleted stage";
    }
}
