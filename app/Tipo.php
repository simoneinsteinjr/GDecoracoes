<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable = [
        'designacao',
        'descricao'
    ];

    public function Cadeira(){
        return $this->hasMany('App\Cadeira');
    }

    public function Mesa(){
        return $this->hasMany('App\Mesa');
    }

    protected $table = 'tipos';
}
