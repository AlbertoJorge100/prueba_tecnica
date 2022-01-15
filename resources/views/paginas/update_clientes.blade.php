@extends('plantilla')
@section('title','modificar cliente')
@section('content')

<form action="{{route('update_cliente',['cliente'=>$cliente])}} " method="POST">
    @csrf
    <label for="">Nombres</label>
    <input type="text" name="nombres" placeholder="ingrese el nombre"  value="{{$cliente->Nombres}} ">
    <br>
    <br>
    <label for="">Correo</label>
    <input type="text" name="correo" placeholder="ingrese el correo"  value="{{$cliente->Correo}} ">
    <br>
    <br>
    <label for="">Telefono</label>
    <input type="text" name="telefono" placeholder="ingrese el telefono"  value="{{$cliente->Telefono}} ">
    <br>
    <br>
    <label for="">Usuario</label>
    <input type="text" name="usuario" placeholder="ingrese el usuario" value="{{$cliente->Usuario}} ">
    <br><br>
    <label for="">Password</label>        
    <input type="password" name="password" placeholder="ingrese el password"  value="{{$cliente->Password}} ">
    <br>
    <br>
    <select name="Activo" id="">
        <option value="1">
            activo
        </option>
        <option value="0">
            Inactivo
        </option>
    </select>
    <button type="submit">Ingresar</button>        


</form>
@endsection
    

    
