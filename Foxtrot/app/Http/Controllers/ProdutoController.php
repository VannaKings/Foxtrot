<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function show(Produto $produto){
        $categorias = Categoria::where('CATEGORIA_ATIVO', 1)->get();
        $maisProdutos = Categoria::find($produto->CATEGORIA_ID)->Produtos;
        $produtos = Produto::where('PRODUTO_ATIVO',1)->get();
        return view('home.produto',['produto'=>$produto, 'produtos'=>$produtos, 'maisProdutos'=> $maisProdutos, 'categorias'=> $categorias]);
    }

    public function home(){
        $categorias = Categoria::where('CATEGORIA_ATIVO', 1)->get();
        return view('home.index',['produtos'=> Produto::where('PRODUTO_ATIVO',1)->get(), 'categorias'=> $categorias]);
    }

    public function produtos(){
        $categorias = Categoria::where('CATEGORIA_ATIVO', 1)->get();
        $produtos = Produto::where('PRODUTO_ATIVO',1)->get();
        return view('home.section',['produtos'=> $produtos, 'categorias' => $categorias]);
    }

    public function filtro(Request $request){
        $categoriasSelecionadas = [];
        $categorias = Categoria::where('CATEGORIA_ATIVO', 1)->get();
        foreach($categorias as $categoria){
            $id = $categoria->CATEGORIA_ID;
            $name = 'check'.$id;
            if(isset($request->$name)){
                array_push($categoriasSelecionadas, $id);
            }
        }
        $categoriasFiltradas = Categoria::findMany($categoriasSelecionadas);
        $produtos = Produto::whereIn('CATEGORIA_ID', $categoriasSelecionadas)->get();
        if(count($categoriasFiltradas) === 0){
            $categoriasFiltradas = $categorias;
            $produtos = Produto::where('PRODUTO_ATIVO',1)->get();
        }

        return view('home.section',['produtos'=> $produtos, 'categorias' => $categorias , 'categoriasFiltradas' => $categoriasFiltradas]);
    }

    public function filtroMenu(Categoria $categoria){
        $categorias = Categoria::where('CATEGORIA_ATIVO', 1)->get();
        $produtos = Produto::where('PRODUTO_ATIVO',1)->where('CATEGORIA_ID', $categoria->CATEGORIA_ID)->get();
        return view('home.section',['produtos'=> $produtos, 'categorias' => $categorias]);
    }
}
