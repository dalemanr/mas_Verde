<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User; //siempre la primera en mayuscula

class UserController extends Controller
{
    //
    //logica y consultas a db
    public function index(int $user_id): view
    {
        //dd($user_id);
       // dd(User::all()); //elocuent para trabajar con sintaxis de mysql
       
       $user = User::find($user_id);

        return view('welcome', ['user'=>$user]);
    }
}
