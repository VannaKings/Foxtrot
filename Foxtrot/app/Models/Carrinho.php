<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Carrinho extends Model
{
    use HasFactory;
    protected $fillable = ["USUARIO_ID", "PRODUTO_ID", 'ITEM_QTD'];
    protected $table = 'CARRINHO_ITEM';
    protected $primaryKey = 'USUARIO_ID';
    public $timestamps = false;

    public function Produto(){
        return $this->belongsTo(Produto::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }
}
