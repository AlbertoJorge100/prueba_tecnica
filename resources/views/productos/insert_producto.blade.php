@extends('plantilla')
@section('title', 'insertar productos')

@section('content')
    {{-- <h1>{{$producto->Producto}} </h1> --}}
    @foreach ($categorias as $categoria)
        <p>{{$categoria->Categoria}} </p><br>        
    @endforeach



    {{-- <form action="" method="post">
        @csrf
        <label for="">Producto</label>
        <input type="text" name ="producto" required>
        <br><br>
        <label for="">Precio</label>
        <input type="text" name="precio">
        <br><br>
        <label for="">Existencias</label>
        <input type="text" name="existencias">
        <br><br>
        <label for="">Imagen</label>
        <input type="text" name="imagen">
        <br><br>
        <label for="">Descripcion</label>
        <input type="text" name="descripcion">
        <br><br>
        <label for="">Promocion</label>
        <input type="text" name="promocion">
        <br><br>
        <label for="">Promo_total</label>
        <input type="text" name="promo_total">
        <br><br>
        <label for="">fecha inicio</label>
        <input type="text" name="fecha_inicio">
        <br><br>
        <label for="">Descripcion</label>
        <input type="text" name="descripcion">
        <br><br>
        <label for="">imagen promocion</label>
        <input type="text" name="imagen_promocion">
        <br><br>
        <button type="submit">ingresar</button>

    </form>
     --}}
    
@endsection
    
