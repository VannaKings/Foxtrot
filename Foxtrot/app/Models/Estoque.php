<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Estoque extends Model
{
    use HasFactory;
    protected $table = "PRODUTO_ESTOQUE";

    protected $primaryKey = "PRODUTO_ID";

    public function produtos(): HasOne{
        return $this->hasOne(Produto::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }
}
