<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Material;

class Reserva extends Model
{
    protected $fillable = [
        'user_id',
        'material_id',
        'quantidade',
        'precoTotal',
//        'dataInicio',
        'dataFim',
        'estado'
    ];

    public function Reserva(){
        return $this->hasMany('App\Material');
    }

    protected $table = 'reservas';
}
