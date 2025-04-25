<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Exception;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function insertarProducto(Request $request){
        $request->validate([
            'codigo'=>'required|string|max:250',
            'descripcion'=>'required|string|max:1000',
            'precio'=>'required|string|max:10',
            'stock'=>'required|string|max:10',
            'familia_id'=>'required|string|max:10',
            'marca_id'=>'required|string|max:10',
            'unidad_medida_id'=>'required|string|max:10',

        ]);
        try{
            $producto = Producto::create([
                'codigo' => $request -> codigo,
                'descripcion' => $request -> descripcion,
                'precio' => $request -> precio,
                'stock' => $request -> stock,
                'familia_id' => $request -> familia_id,
                'marca_id' => $request -> marca_id,
                'unidad_medida_id' => $request -> unidad_medida_id,
            ]);
            return response()->json([
                'message'=>'se inserto correctamente',
                'prodcuto'=>$producto
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'message'=>'error al insertar cliente',
                'error'=>$e
            ], 500);
            
        }
    }
}
