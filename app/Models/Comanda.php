<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }
}
