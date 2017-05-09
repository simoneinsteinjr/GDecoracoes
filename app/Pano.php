<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pano extends Model
{
    protected $fillable = [
        'cor',
        'quantidade',
        'preco',
        'foto'
    ];

    protected $table = 'panos';
}
