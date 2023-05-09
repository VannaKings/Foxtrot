<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\Produto;
use App\Models\Categoria;
use Auth;


class UserController extends Controller
{

    public function index(){
        $categorias = Categoria::where('CATEGORIA_ATIVO', 1)->get();
        return view('cadastro.index', ['categorias'=> $categorias]);
    }

    public function create(Request $request): RedirectResponse{
        $categorias = Categoria::where('CATEGORIA_ATIVO', 1)->get();
        // $user = User::create([
        //     'USUARIO_NOME' => ['USUARIO_NOME'],
        //     'USUARIO_EMAIL' => ['USUARIO_EMAIL'],
        //     'USUARIO_SENHA' => ['USUARIO_SENHA']
        // ]);

        // $user->save();

        // return redirect('/');
        return view('cadastro.index', ['categorias'=> $categorias]);
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
        $categorias = Categoria::where('CATEGORIA_ATIVO', 1)->get();
        if(Auth::check()){
            return view('home.perfil', ['categorias'=> $categorias]);
        }
        else{
            abort(404);
        }

    }

    public function pedidos(){
        $categorias = Categoria::where('CATEGORIA_ATIVO', 1)->get();
        return view('home.pedidos', ['categorias'=> $categorias]);
    }

    public function carrinho(){
        $categorias = Categoria::where('CATEGORIA_ATIVO', 1)->get();
        return view('home.carrinho', ['categorias'=> $categorias]);
    }

    public function endereco(){
        $categorias = Categoria::where('CATEGORIA_ATIVO', 1)->get();
        return view('home.endereco', ['categorias'=> $categorias]);
    }
    public function show(){
        $categorias = Categoria::where('CATEGORIA_ATIVO', 1)->get();
        return view('home.usuario', ['categorias'=> $categorias]);
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
