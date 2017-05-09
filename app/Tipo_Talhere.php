<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Talhere extends Model
{
    protected $fillable = [
        'designacao',
        'descricao'
    ];

    public function Talhere(){
        return $this->hasMany('App\Talhere');
    }

    protected $table = 'tipo_talheres';
}
