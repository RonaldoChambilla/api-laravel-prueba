<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    // Atributos que se pueden asignar masivamente
protected $fillable = ['nombres','apellidos', 'razonsocial','numerodocumento', 'telefono', 'pago_realizado',
'correoelectronico', 'tipo_persona_id', 'tipo_documento_id'];
}
