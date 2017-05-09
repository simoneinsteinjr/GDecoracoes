<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talhere extends Model
{
    protected $fillable = [
        'tipo_talhere_id',
        'quantidade',
        'preco',
        'foto'
    ];

    public function Tipo_Talhere(){
        return $this->belongsTo('App\Tipo_Talhere');
    }

    protected $table = 'talheres';
}
