<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Asociado;
class Empresario extends Model
{
    use HasFactory;

    protected $fillable = [
        'rubro',
        'capacidad_pago',
    ];
    public function asociado(){
        return $this->belongsTo(Asociado::class);
    }
}
