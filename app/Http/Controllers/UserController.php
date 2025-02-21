<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::select('name', 'level', 'phone','username' )
        ->get();
        // ->paginate(10);

        // $totalUsers = User::count();
        return view('user',  compact('users'));

    }
}
