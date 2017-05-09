<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    protected $fillable = [
        'tipo_prato_id',
        'quantidade',
        'preco',
        'foto'
    ];

    public function Tipo_Prato(){
        return $this->belongsTo('App\Tipo_Prato');
    }

    protected $table = 'pratos';
}
