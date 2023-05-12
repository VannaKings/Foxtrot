<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pedido extends Model
{
    use HasFactory;

    protected $table = "PEDIDO";
    protected $fillable = ["USUARIO_ID",'STATUS_ID','PEDIDO_DATA'];
    protected $primaryKey = 'PEDIDO_ID';
    protected $casts = ['PEDIDO_DATA'=>'datetime'];

    public $timestamps = false;

    public function PedidoItem(){
        return $this->hasMany(PedidoItem::class, 'PEDIDO_ID', 'PEDIDO_ID');
    }

    public function getTotalPrice(){
        $pedidos = $this->PedidoItem;
        $totalPrice = 0.00;
        foreach($pedidos as $pedido){
            $totalPrice += floatval($pedido->ITEM_PRECO*$pedido->ITEM_QTD);
        }
        return number_format($totalPrice,2,',', '.');
    }
    public function Status(){
        return $this->belongsTo(PedidoStatus::class, 'STATUS_ID', 'STATUS_ID');
    }
}
