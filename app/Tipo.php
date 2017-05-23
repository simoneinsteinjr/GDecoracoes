<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable = [
        'designacao',
        'descricao'
    ];

    public function Mesa(){
        return $this->hasMany('App\Material');
    }

    protected $table = 'tipos';
}
