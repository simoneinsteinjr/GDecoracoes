<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = [
        'nome',
        'tipo_id',
        'medida',
        'quantidade',
        'preco',
        'foto'
    ];

    public function Tipo(){
        return $this->belongsTo('App\Tipo');
    }

    protected $table = 'mesas';
}
