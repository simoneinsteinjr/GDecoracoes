<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'tipo_id',
        'medida',
        'quantidade',
        'preco',
        'foto',
        'descricao'
    ];

    public function Tipo(){
        return $this->belongsTo('App\Tipo');
    }

    public function Reserva(){
        return $this->hasMany('App\Reserva');
    }

    protected $table = 'material';
}
