<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Endereco;


class EnderecoController extends Controller
{
    public function store(Request $request, Endereco $enderecos){
        $endereco = Endereco::where('USUARIO_ID', Auth::user()->USUARIO_ID)
        ->where('ENDERECO_ID',$enderecos->ENDERECO_ID)->first();
        if($endereco){
            $endereco = $endereco->update([
                'ENDERECO_NOME' => $request->nome,
                'ENDERECO_LOGRADOURO' => $request->logradouro,
                'ENDERECO_NUMERO' => $request->numero,
                'ENDERECO_COMPLEMENTO' => $request->complemento,
                'ENDERECO_CEP' => $request->cep,
                'ENDERECO_CIDADE' => $request->cidade,
                'ENDERECO_ESTADO' => $request->estado,
                'ENDERECO_APAGADO' => 0
            ]);
        }else{
            $endereco = Endereco::create([
                'USUARIO_ID' => Auth::user()->USUARIO_ID,
                'ENDERECO_NOME' => $request->nome,
                'ENDERECO_LOGRADOURO' => $request->logradouro,
                'ENDERECO_NUMERO' => $request->numero,
                'ENDERECO_COMPLEMENTO' => $request->complemento,
                'ENDERECO_CEP' => $request->cep,
                'ENDERECO_CIDADE' => $request->cidade,
                'ENDERECO_ESTADO' => $request->estado,
                'ENDERECO_APAGADO' => 0
            ]);
        }
        return redirect(route('perfil'));
    }

    public function index(){
        $endereco = Endereco::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get();
        return view('home.perfil')->with('endereco', $endereco);
    }
    public function delete($enderecos, Request $request){

        $endereco = Endereco::where('ENDERECO_ID',$enderecos)->first();
        $endereco->update([
            'ENDERECO_APAGADO' => 1
        ]);
        return redirect(route('perfil'));
    }

    public function show(Endereco $endereco){
        return view('home.endereco',['endereco'=>$endereco]);
    }

    public function alterar($endereco, Request $request){
        $enredecoNovo = Endereco::where('ENDERECO_ID',$endereco)->first();
        $enredecoNovo->update([
            'ENDERECO_NOME' => $request->nome == '' ? $enredecoNovo->ENDERECO_NOME : $request->nome,
            'ENDERECO_LOGRADOURO' => $request->logradouro == '' ? $enredecoNovo->ENDERECO_LOGRADOURO : $request->logradouro,
            'ENDERECO_NUMERO' => $request->numero == '' ? $enredecoNovo->ENDERECO_NUMERO : $request->numero,
            'ENDERECO_COMPLEMENTO' => $request->complemento == '' ? $enredecoNovo->ENDERECO_COMPLEMENTO : $request->complemento,
            'ENDERECO_CEP' => $request->cep == '' ? $enredecoNovo->ENDERECO_CEP : $request->cep,
            'ENDERECO_CIDADE' => $request->cidade == '' ? $enredecoNovo->ENDERECO_CIDADE : $request->cidade,
            'ENDERECO_ESTADO' => $request->estado == '' ? $enredecoNovo->ENDERECO_ESTADO : $request->estado

        ]);
        return redirect(route('perfil'));
    }
}
