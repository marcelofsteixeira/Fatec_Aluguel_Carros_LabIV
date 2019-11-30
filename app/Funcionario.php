<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{

    protected $table="funcionario";

    protected $fillable = [
        'nome',
        'creci',
        'fone',
        'email',
    ];

    public function alugueis()
    {
        return $this->hasMany('App\Aluguel');
    }

}
