<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{

    protected $table="incidente";

    protected $fillable = [
        'nome',
        'creci',
        'fone',
        'email',
    ];

    public function aluguel()
    {
        return $this->belongsTo('App\Aluguel');
    }
}
