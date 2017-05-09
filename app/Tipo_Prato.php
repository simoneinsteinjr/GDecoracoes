<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Prato extends Model
{
    protected $fillable = [
        'designacao',
        'descricao'
    ];

    public function prato(){
        return $this->hasMany('App\Prato');
    }

    protected $table = 'tipo_pratos';
}
