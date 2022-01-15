<?php

namespace App\Http\Controllers;
use App\Models\clientes;

use Illuminate\Http\Request;

class controlador_clientes extends Controller
{
    public function index(){
        $clientes=Clientes::all()
                  ->where('Activo',true);
        //return $clientes; 
        return view('paginas.home',['clientes'=>$clientes]);
    }
    public function insert_cliente(Request $request){
         $cliente=clientes::create([
            'Nombres'=>$request->nombres,
            'Correo'=>$request->correo,
            'Telefono'=>$request->telefono,
            'Usuario'=>$request->usuario,
            'Password'=>$request->password
        ]);
        if(isset($cliente))
            return redirect()->route('prueba.index');
        return 'El cliente no pudo ser ingresado';  
        //return $request;
    }
    public function form_update_cliente(clientes $cliente){                
        return view('paginas.update_clientes',['cliente'=>$cliente]);
    }
    public function update_cliente(clientes $cliente, Request $request){
        $cliente->Nombres=$request->nombres;
        $cliente->Correo=$request->correo;
        $cliente->Telefono=$request->telefono;
        $cliente->Usuario=$request->usuario;
        $cliente->Password=$request->password;
        $cliente->save();
        if(isset($cliente))
            return redirect()->route('prueba.index');        
        return 'no pudo ser modificado el cliente';        
    }
    public function delete_cliente(clientes $cliente){
        $cliente->Activo=false;
        $cliente->save();
        if(isset($cliente))
            return redirect()->route('prueba.index');
        return 'no se pudo eliminar el cliente';
        //return $cliente;
    }
}
