<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Carrinho;
use App\Models\Estoque;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    public function store(Produto $produto, Request $request){
        $item = Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)
                ->where('PRODUTO_ID',$produto->PRODUTO_ID)->first();

        if($item){
            $item = $item->update([
                'ITEM_QTD' => $item->ITEM_QTD + $request->qtd
            ]);
        }else{
            $item = Carrinho::create([
                'USUARIO_ID' => Auth::user()->USUARIO_ID,
                'PRODUTO_ID' => $produto->PRODUTO_ID,
                'ITEM_QTD' =>  $request->qtd
            ]);
        }


        return redirect(route('carrinho.index'));
    }
    public function index(){
        $categorias = Categoria::where('CATEGORIA_ATIVO', 1)->get();
        $carrinho = Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get();
        return view('home.carrinho', ['carrinho'=> $carrinho, 'categorias' => $categorias]);
    }

    public function alterar(Produto $produto, Request $request){
        $carrinho = Carrinho::where('USUARIO_ID',  Auth::user()->USUARIO_ID)->where('PRODUTO_ID', $produto->PRODUTO_ID)->update([
            'ITEM_QTD' => $request->qtd
        ]);
        return redirect(route('carrinho.index'));
    }
    public function delete(Produto $produto, Request $request){
        $carrinho = Carrinho::where('USUARIO_ID',  Auth::user()->USUARIO_ID)->where('PRODUTO_ID', $produto->PRODUTO_ID)->update([
            'ITEM_QTD' => 0
        ]);
        return redirect(route('carrinho.index'));
    }
}
