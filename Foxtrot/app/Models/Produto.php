<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Produto extends Model
{
    use HasFactory;

    protected $table = "PRODUTO";

    protected $primaryKey = "PRODUTO_ID";

    // protected $foreignKey = "CATEGORIA_ID";

    public function Preco(){
        return number_format(($this->PRODUTO_PRECO - $this->PRODUTO_DESCONTO), 2, ',', '.');
    }

    public function categoria() : BelongsTo{
        return $this->belongsTo(Categoria::class, 'CATEGORIA_ID', 'CATEGORIA_ID');
    }

    public function estoque() : HasOne{
        return $this->hasOne(Estoque::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }

    public function getCategoria(){
        $produtoCategoria = Categoria::find($this->CATEGORIA_ID);
        return $produtoCategoria->CATEGORIA_NOME;
    }
    // public function getEstoque(){
    //     $produtoEstoque = Estoque::find($this->PRODUTO_ID);
    //     return $produtoEstoque->PRODUTO_QTD;
    // }{{$produto->getEstoque()}}
}
