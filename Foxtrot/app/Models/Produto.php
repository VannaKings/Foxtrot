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
    public function ProdutoImagem(){
        return $this->hasMany(ProdutoImagem::class,'PRODUTO_ID', 'PRODUTO_ID');
    }

    public function getPrecoDesconto(){
        return number_format(($this->PRODUTO_PRECO - $this->PRODUTO_DESCONTO), 2, ',', '.');
    }

    public function Categoria(){
        return $this->belongsTo(Categoria::class, 'CATEGORIA_ID', 'CATEGORIA_ID');
    }

    public function ProdutoEstoque(){
        return $this->belongsTo(Estoque::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }

    public function getCategoria(){
        $produtoCategoria = Categoria::find($this->CATEGORIA_ID);
        return $produtoCategoria->CATEGORIA_NOME;
    }
    public function getEstoque(){
        $produtoEstoque = Estoque::find($this->PRODUTO_ID);
        if($produtoEstoque != null){
            return $produtoEstoque->PRODUTO_QTD;
        }else{
            return 'Indisponível';
        }

    }


}
