<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use App\Models\productos;
use Illuminate\Http\Request;

class controlador_productos extends Controller
{
    public function select_productos(){
        $productos=productos::all()
                    ->where('Activo', true);
        return view('productos.select_productos', ['productos'=>$productos]);
    }

    public function form_insert_producto(){
        $categorias=categorias::all();        
        return view('productos.insert_producto', ['categorias'=>$categorias]);                
    }
    public function form_update_producto(productos $producto){
        $categorias=categorias::all();        
        return view('productos.update_producto', ['producto'=>$producto, 'categorias'=>$categorias]);
    }
}
