<?php

namespace App\Http\Controllers;
use App\Models\MarcaProducto;
use Exception;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function insertarMarca(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:250'
        ]);
        try{
            if($request->nombre == '1'){
                return response()->json(['El campo de nombre debe estar llenado para insertar una marca.'], 400);
            }else{
            $marca = MarcaProducto::create([
                'nombre' => $request -> nombre,
            ]);
            return response()->json([
                'message'=>'Se inserto correctamente la marca.',
                'marca'=> $marca
            ], 200);
        }
        }catch(Exception $e){
            return response()->json([
                'message'=>'No se pudo insertar la marca.',
                'error'=>$e
            ], 500);
        }
    }
}
