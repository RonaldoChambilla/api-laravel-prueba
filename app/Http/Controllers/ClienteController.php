<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    // Método para insertar un nuevo cliente
public function store(Request $request){
    
// Validar los datos recibidos
$request->validate([
    'nombres' => 'required|string|max:255',
    'apellidos' => 'required|string|max:255',
    'razonsocial' => 'required|string|max:255',
    'numerodocumento' => 'required|string|max:100',
    'telefono' => 'required|string|max:15',
    'pago_realizado' => 'required|boolean', // Aseguramos que elpago esté indicado
    'correoelectronico' => 'required|email|unique:clientes,correoelectronico',
    'tipo_persona_id' => 'required|string|max:10',
    'tipo_documento_id' => 'required|string|max:10',


    ]);
    // Verificar si el pago ha sido realizado
if ($request->pago_realizado) {
    // Crear el cliente en la base de datos
$cliente = Cliente::create([
    'nombres' => $request -> nombres,
    'apellidos' => $request -> apellidos,
    'razonsocial' => $request -> razonsocial,
    'numerodocumento' => $request -> numerodocumento,
    'telefono' => $request -> telefono,
    'pago_realizado' => $request -> pago_realizado,
    'correoelectronico' => $request -> correoelectronico,
    'tipo_persona_id' => $request -> tipo_persona_id,
    'tipo_documento_id' => $request -> tipo_documento_id,

]);
    // Retornar una respuesta con el código 200 y un mensaje de éxito
    return response()->json([
    'message' => 'Cliente registrado con éxito',
    'cliente' => $cliente
], 200);
} else {
// Si el pago no ha sido realizado, retornar un mensaje de error
return response()->json([
    'message' => 'Debe realizar el pago antes de proceder con el registro del cliente.'
],400);
}
}
}
