<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Produto extends Controller
{
    public function produto(){
        return view('site.produto');
    
    }
}
