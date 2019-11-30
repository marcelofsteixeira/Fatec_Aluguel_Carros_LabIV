<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table="cliente";

    protected $fillable = [
        'cpf',
        'nome',
        'rg',
        'endereco',
        'cep',
        'cel',
        'tel',
        'email'
    ];

    protected $primaryKey = 'cpf';

    public function alugueis()
    {
        return $this->hasMany('App\Aluguel');
    }
}
