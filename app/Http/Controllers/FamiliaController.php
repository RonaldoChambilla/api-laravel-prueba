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
        $familia = Familia::create([
            'nombre' => $request -> nombre,
        ]
        );
        return response()->json([
            'message'=>'familia creada correctamente',
            'familia'=>$familia
        ]);
    }catch(Exception $e){
        return response()->json([
            'error al incertar familia'=> $e
        ]);
    }
    
    }
}
