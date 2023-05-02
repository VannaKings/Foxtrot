<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Categoria extends Model
{
    use HasFactory;

    protected $table = "CATEGORIA";

    protected $primaryKey = "CATEGORIA_ID";

    public function Produtos(){
        return $this->hasMany(Produto::class, 'CATEGORIA_ID', 'CATEGORIA_ID');
    }

    public function getCategoriaNome(){
        $nome = $this->CATEGORIA_NOME;
        $nome = strtolower($nome);
        $nome = ucfirst($nome);
        return $nome;

    }
}
