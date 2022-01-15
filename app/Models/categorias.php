<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $primaryKey="IDCategoria";
    protected $table="categorias";
    public $timestamps=false;
    protected $fillable=["Categoria", "Imagen", "Estado", "Activo"];
}
