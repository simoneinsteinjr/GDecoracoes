<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadeira extends Model
{
    protected $fillable = [
        'tipo_id',
        'quantidade',
        'preco',
        'foto'
    ];

    public function Tipo(){
        return $this->belongsTo('App\Tipo');
    }

    protected $table = 'cadeiras';
}
