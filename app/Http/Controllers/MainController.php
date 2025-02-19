<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function main(){
        $users  = User::paginate(15);
       
        // dd($users);
        return view('welcome')->with([
            'users'=>$users
        ]);
    }
    public function dashboard(){
        return view('dashboard');
    }
}
