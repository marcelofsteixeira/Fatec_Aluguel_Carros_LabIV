<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{

    protected $table="funcionario";

    protected $fillable = [
        'cpf',
        'nome',
        'rg',
        'endereco',
        'cep',
        'cel',
        'tel',
        'email',
        'cargo'
    ];

    protected $primaryKey = 'cpf';

    public function alugueis()
    {
        return $this->hasMany('App\Aluguel');
    }

}
