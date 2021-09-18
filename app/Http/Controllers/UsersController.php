<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function exibirUser($id)
    {
        $user = User::where('id',$id)->first();
        return view('user',['user'=>$user]);
    }
}
