<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PedidoItem extends Model
{
    use HasFactory;

    protected $table = "PEDIDO_ITEM";
    protected $fillable = ["PRODUTO_ID",'PEDIDO_ID','ITEM_QTD', 'ITEM_PRECO'];
    public $timestamps = false;

    public function Pedido(){
        return $this->belongsTo(Pedido::class, 'PEDIDO_ID', 'PEDIDO_ID');
    }
    public function Produto(){
        return $this->belongsTo(Produto::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }
}
