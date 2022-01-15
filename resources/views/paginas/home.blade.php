@extends('plantilla')
@section('title','hola mundo')    

@section('content')
    <h1>este es el contenido de la pagina home</h1>
    <p>Numero de clientes: {{count($clientes)}} </p>
    <a href="{{route('form_cliente')}}">insertar cliente</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->Nombres}} </td>
                    <td>{{$cliente->Correo}} </td>
                    <td>{{$cliente->Telefono}} </td>
                    <td><a href="{{route('form_update_cliente',['cliente'=>$cliente])}} ">Modificar</a>
                        <a href="{{route('delete_cliente', ['cliente'=>$cliente])}}" onclick="return eliminar_usuario('{{$cliente->Nombres}}')">Eliminar</a>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
    <script>
        function eliminar_usuario(usuario){
            return confirm("desea eliminar: \""+usuario+"\", recuerde que esta accion ya no se puede deshacer !");
        }
    </script>
    {{-- <p>Nombres: {{$cliente->Nombres}} </p> --}}
@endsection