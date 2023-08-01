<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'quantidade', 'preco', 'status', 'observacao', 'hora_pedido', 'cliente_id', 'comanda_id'];
    protected $table = 'pedidos';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function mesa()
    {
        return $this->belongsTo(Comanda::class, 'mesa_id');
    }

    public function comanda()
    {
        return $this->belongsTo(Comanda::class, 'comanda_id');
    }

}
