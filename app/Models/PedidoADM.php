<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoADM extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'quantidade', 'preco', 'status', 'observacao', 'hora_pedido'];

    // public function clientes()
    // {
    //     return $this->belongsToMany(Cliente::class, 'pedido_usuario', 'pedido_id', 'cliente_id');
    // }

    // public function clientes()
    // {
    //     return $this->hasOne(Cliente::class);
    // }

}
