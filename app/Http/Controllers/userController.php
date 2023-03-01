<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    function index()
    {
        $users=User::get();
        return view('user',['users'=>$users]);
    }

    function viewUser($id)
    {
        $user=User::find($id);
        return view('userView',['user'=>$user]);
    }
}
