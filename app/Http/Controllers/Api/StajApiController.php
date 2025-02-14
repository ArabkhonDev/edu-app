<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Staj;
use Illuminate\Http\Request;

class StajApiController extends Controller
{

    public function index()
    {
        return Staj::all();
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
        $request->delete;
        return "deleted staj";
    }
}
