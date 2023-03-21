<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\Produto;


class UserController extends Controller
{
    public function index(){
        return view('cadastro.index');
    }

    public function create(Request $request): RedirectResponse{

        // $user = User::create([
        //     'USUARIO_NOME' => ['USUARIO_NOME'],
        //     'USUARIO_EMAIL' => ['USUARIO_EMAIL'],
        //     'USUARIO_SENHA' => ['USUARIO_SENHA']
        // ]);

        // $user->save();

        // return redirect('/');
        return view('cadastro.index');
    }

    public function store(Request $request){
        User::create($request->only([
            "USUARIO_NOME" => $request->USUARIO_NOME,
            "USUARIO_EMAIL" => $request->USUARIO_EMAIL,
            "USUARIO_SENHA" => $request->USUARIO_SENHA,
            "USUARIO_CPF" => $request->USUARIO_CPF
        ]));

        return redirect()->route('home.index');
    }
}