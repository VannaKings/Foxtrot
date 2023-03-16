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

    public function produtos(): HasMany{
        return $this->hasMany(Produto::class, 'CATEGORIA_ID', 'CATEGORIA_ID');
    }
}
