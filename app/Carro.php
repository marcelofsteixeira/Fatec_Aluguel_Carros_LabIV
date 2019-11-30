<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table="carro";

    protected $fillable = [
        'nome',
        'creci',
        'fone',
        'email',
    ];

    public function alugueis()
    {
        return &this->hasMany('App\Aluguel');
    }
}
