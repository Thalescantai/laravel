<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuariosController extends Controller
{
    public function usuario(){

        $users = User::all();
        
        return view('site.usuarios',['user' => $users]);
    }
}
