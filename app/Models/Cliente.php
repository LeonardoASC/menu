<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'cpf'];

    protected $table = 'clientes';

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'cliente_id');
    }

    public function comanda()
    {
        return $this->hasOne(Comanda::class);
    }
}
