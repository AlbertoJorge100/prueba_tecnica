<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $primaryKey="IDProducto";
    protected $table="productos";
    public $timestamps=false;
    protected $fillable=["Producto", "Precio", "Existencias", "Imagen", "Descripcion", "IDCategoria", "Activo", "Estado", "Promocion", "promo_total", "pr_fecha_inicio", "pr_fecha_fin", "pr_descripcion", "ImagenPromocion"];
}
