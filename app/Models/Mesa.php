<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    protected $fillable = ['numero_cadeiras', 'status'];

    public function comandas()
    {
        return $this->hasMany(Comanda::class);
    }
}
