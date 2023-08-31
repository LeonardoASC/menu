<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;
    protected $fillable = ['total', 'cliente_id', 'mesa_id', 'status'];
    protected $table = 'comandas';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'comanda_id');
    }
}
