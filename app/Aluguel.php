<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    protected $table="aluguel";

    protected $fillable = [
        'nome',
        'creci',
        'fone',
        'email',
    ];

    
    public function incidentes()
    {
        return &this->hasMany('App\Incidente');
    }

    public function carro()
    {
        return $this->belongsTo('App\Carro');
    }

    public function funcionario()
    {
        return $this->belongsTo('App\Funcionario');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }


}
