@extends('plantilla')
@section('title', 'productos')

@section('content')
    <h1>productos...</h1>
    <a href="{{route('insert_producto')}} ">insertar producto</a>
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Existencias</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->Producto}} </td>
                    <td>{{$producto->Precio}} </td>
                    <td>{{$producto->Existencias}} </td>
                    <td><a href="{{route('form_update_producto', ['producto'=>$producto])}} ">Modificar</a>
                        <a href="">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>



@endsection
    