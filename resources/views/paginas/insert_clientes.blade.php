@extends('plantilla')
@section('title', 'insertar usuarios')
@section('content')
    <h1>insertar usuario</h1>
    <form action="{{route('insert_cliente')}} " method="POST">
        @csrf
        <label for="">Nombres</label>
        <input type="text" name="nombres" placeholder="ingrese el nombre" >
        <br>
        <br>
        <label for="">Correo</label>
        <input type="text" name="correo" placeholder="ingrese el correo" >
        <br>
        <br>
        <label for="">Telefono</label>
        <input type="text" name="telefono" placeholder="ingrese el telefono" >
        <br>
        <br>
        <label for="">Usuario</label>
        <input type="text" name="usuario" placeholder="ingrese el usuario">
        <br><br>
        <label for="">Password</label>        
        <input type="password" name="password" placeholder="ingrese el password" >
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