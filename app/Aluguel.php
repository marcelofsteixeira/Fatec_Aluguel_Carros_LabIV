<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    protected $table="aluguel";

    protected $fillable = [
        'id',
        'cliente_id',
        'carro_id',
        'preco',
        'funcionario_id',
        'data_aluguel',
        'data_entrega_esperada',
        'data_entrega'
    ];

    //protected $primaryKey = 'id';

    
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
