<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;

    protected $table = 'comandas';

    protected $fillable = [
        'numeroComanda',
        'estadoComanda',
        'totalComanda',
        'idMesa',
    ];

    public function mesa()
    {
        return $this->belongsTo(Mesa::class, 'idMesa');
    }
}
