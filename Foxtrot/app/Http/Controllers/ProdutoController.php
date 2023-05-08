<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto){
        $maisProdutos = Categoria::find($produto->CATEGORIA_ID)->Produtos;
        $produtos = Produto::where('PRODUTO_ATIVO',1)->get();
        return view('home.produto',['produto'=>$produto, 'produtos'=>$produtos, 'maisProdutos'=> $maisProdutos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        //
    }

    public function home(){
        return view('home.index')->with('produtos', Produto::where('PRODUTO_ATIVO',1)->get());
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
}
