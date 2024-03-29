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
        $produtos = Produto::all();
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
        return view('home.index')->with('produtos', Produto::all());
    }

    public function produtos(){
        $categorias = Categoria::all();
        $produtos = Produto::all();
        return view('home.section',['produtos'=> $produtos, 'categorias' => $categorias]);
    }


}
