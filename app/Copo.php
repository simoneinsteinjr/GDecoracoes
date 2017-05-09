<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Copo extends Model
{
    protected $fillable = [
        'tipo_copo_id',
        'quantidade',
        'preco',
        'foto'
    ];

    public function Tipo_Copo(){
        return $this->belongsTo('App\Tipo_Copo');
    }

    protected $table = 'copos';
}
