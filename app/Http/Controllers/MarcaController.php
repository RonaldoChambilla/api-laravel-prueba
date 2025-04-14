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
            $marca = MarcaProducto::create([
                'nombre' => $request -> nombre,
            ]);
            return response()->json([
                'message'=>'Se inserto correctamente la marca.',
                'marca'=> $marca
            ]);
        }catch(Exception $e){
            return response()->json([
                'message'=>'No se pudo insertar la marca.',
                'error'=>$e
            ]);
        }
    }
}
