<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Copo extends Model
{
    protected $fillable = [
        'designacao',
        'descricao'
    ];

    public function Copo(){
        return $this->hasMany('App\Copo');
    }

    protected $table = 'tipo_copos';
}
