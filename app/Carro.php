<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table="carro";
    public $keyType = 'string';

    protected $fillable = [
        'placa',
        'cor',
        'marca',
        'modelo',
        'num_renavan',
        'diaria'
    ];

    public $primaryKey = 'placa';

    public function alugueis()
    {
        return $this->hasMany('App\Aluguel');
    }
}
