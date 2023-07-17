<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'cpf'];

    // public function pedidos()
    // {
    //     return $this->belongsToMany(Pedido::class, 'pedido_usuario', 'cliente_id', 'pedido_id');
    // }

    public function pedidos()
    {
        return $this->belongsTo(Pedido::class);
    }

}
