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

    public function show(Language $language)
    {
        return $language;
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Language $language)
    {
        $language->delete();
        return "deleted lanugage";
    }
}
