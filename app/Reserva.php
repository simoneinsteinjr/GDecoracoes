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
        'preco',
        'dataFim',
        'descricao',
        'estado'
    ];

    public function Material(){
        return $this->belongsTo('App\Material');
    }

    public function User(){
        return $this->belongsTo('App\User');
    }

    protected $table = 'reservas';
}
