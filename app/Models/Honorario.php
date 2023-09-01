<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Honorario extends Model
{
    use HasFactory;
    protected $fillable = ['preco_cover', 'porcentagem_garcom', 'taxa_reserva', 'taxa_cortesia'];
}
