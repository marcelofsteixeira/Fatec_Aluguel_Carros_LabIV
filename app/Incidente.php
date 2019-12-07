<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{

    protected $table="incidente";

    protected $fillable = [
        'id',
        'aluguel_id',
        'data',
        'descricao',
        'multa',
    ];

    //protected $primaryKey = 'id';

    public function aluguel()
    {
        return $this->belongsTo('App\Aluguel');
    }
}
