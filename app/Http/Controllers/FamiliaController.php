<?php

namespace App\Http\Controllers;
use App\Models\Familia;
use Exception;
use Illuminate\Http\Request;

class FamiliaController extends Controller
{
    public function insertarFamilia (Request $request){
        $request->validate([
            'nombre' => 'required|string|max:250',
        ]
        );
    try{
        if($request->nombre == ""){
            return response()->json(['El campo de nombre debe estar llenado para insertar una marca.'], 400);
            }else{
        $familia = Familia::create([
            'nombre' => $request -> nombre,
        ]
        );
        return response()->json([
            'message'=>'familia creada correctamente',
            'familia'=>$familia
        ], 200);
    }
    }catch(Exception $e){
        return response()->json([
            'error al incertar familia'=> $e
        ], 500);
    }
    
    }
}
