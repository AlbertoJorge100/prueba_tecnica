@extends('plantilla')
@section('title', 'actualizar productos')

@section('content')
    <h1>{{$producto->Producto}} </h1>
    
        <form action="" method="post">
        @csrf
        <label for="">Producto</label>
        <input type="text" name ="producto"  value="{{$producto->Producto}} "required>
        <br><br>
        <label for="">Precio</label>
        <input type="text" name="precio" value="{{$producto->Precio}} ">
        <br><br>
        <label for="">Existencias</label>
        <input type="text" name="existencias" value="{{$producto->Existencias}} ">
        <br><br>
        <label for="">Imagen</label>
        <input type="text" name="imagen" value="{{$producto->Imagen}} ">
        <br><br>
        <label for="">Descripcion</label>
        <input type="text" name="descripcion" value="{{$producto->Descripcion}} ">
        <br><br>
        <label for="">Promocion</label>
        <input type="text" name="promocion" value="{{$producto->Promocion}} ">
        <br><br>
        <label for="">Promo_total</label>
        <input type="text" name="promo_total" value="{{$producto->promo_total}} ">
        <br><br>
        <label for="">fecha inicio</label>
        <input type="text" name="fecha_inicio" value="{{$producto->pr_fecha_inicio}} ">
        <br><br>
        <label for="">fecha fin</label>
        <input type="text" name="descripcion" value="{{$producto->pr_fecha_fin}} ">
        <br><br>
        <label for="">imagen promocion</label>
        <input type="text" name="imagen_promocion" value="{{$producto->ImagenPromocion}} ">
        <br><br>
        <select name="categorias" id="">
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->IDCategoria}} ">
                    {{$categoria->Categoria}}
                </option>
            @endforeach
        </select>
        <button type="submit">ingresar</button>

    </form>
     
    
@endsection
    
