<?php

namespace App\Http\Controllers\UsersAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class UsersAdmin extends Controller
{
    public function index(){
        $users=User::all();
        return view('users', [
                'users'=>$users,
        ]);
    }
}
