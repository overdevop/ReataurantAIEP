<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoProveedor extends Model
{
    protected $table = 'pedidos_proveedores';

    protected $fillable = [
        'numeroPedido',
        'cantidadProducto',
        'idProducto',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'idProducto');
    }
}
