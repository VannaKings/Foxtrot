<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\Produto;
use Auth;


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
        User::create([
            "USUARIO_NOME" => $request->USUARIO_NOME,
            "USUARIO_EMAIL" => $request->USUARIO_EMAIL,
            "USUARIO_SENHA" => $request->USUARIO_SENHA,
            "USUARIO_CPF" => $request->USUARIO_CPF
            // "USUARIO_CPF" => '11111111111'
        ]);

        return redirect()->route('home.index');
    }

    public function perfil(){
        if(Auth::check()){
            return view('home.perfil');
        }
        else{
            abort(404);
        }

    }

    public function pedidos(){
        return view('home.pedidos');
    }

    public function carrinho(){
        return view('home.carrinho');
    }

    public function endereco(){
        return view('home.endereco');
    }
    public function show(){
        return view('home.usuario');
    }

    public function alterar(Request $request){
        $user = User::where('USUARIO_ID', Auth::user()->USUARIO_ID)->first();

        if($request->senha === $request->senha2){
            $user->update([
                'USUARIO_NOME' => $request->nome == '' ? Auth::user()->USUARIO_NOME : $request->nome,
                'USUARIO_EMAIL' => $request->email== '' ? Auth::user()->USUARIO_EMAIL :$request->email,
                'USUARIO_SENHA' => $request->senha == '' ?  Auth::user()->USUARIO_SENHA :$request->senha
            ]);
        }
        return redirect(route('perfil'));
    }
}
