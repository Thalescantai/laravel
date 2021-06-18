<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PrincipalController extends Controller
{
    public function principal(){
        return view('site.principal');
    }
    public function store(Request $request){
        $user = new User;

        $user->nm_user         = $request->nm_user;
        $user->email_user      = $request->email_user;
        $user->cpf_user        = $request->cpf_user;
        $user->tel_user        = $request->tel_user;
        $user->nascimento_user = $request->nascimento_user;
        $user->oai_user        = $request->pai_user;
        $user->mae_user        = $request->mae_user;
        $user->rg_user        = $request->rg_user;
        $user->cep_user        = $request->cep_user;
        $user->rua_user        = $request->rua_user;
        $user->bairro_user      = $request->bairro_user;
        $user->cidade_user      = $request->cidade_user;
        $user->rg_user        = $request->uf_user;
        $user->renda_user       = $request->renda_user;

        $user->created_at = $request->created_at;

        $user->save();

        return redirect ('/usuarios');

    }
}
