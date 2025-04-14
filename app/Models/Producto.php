<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo','descripcion','precio','stock','familia_id','marca_id','unidad_medida_id'
    ];
}
