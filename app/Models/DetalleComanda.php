<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleComanda extends Model
{
    protected $table = 'detalles_comandas';

    protected $fillable = [
        'cantidadProducto',
        'totalLinea',
        'idProducto',
    ];
}
