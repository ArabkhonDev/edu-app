<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageApiController extends Controller
{

    public function index()
    {
        return Language::all();
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
        return "deleted lanugage";
    }
}
