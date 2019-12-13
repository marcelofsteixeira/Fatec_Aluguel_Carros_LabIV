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
    
    public static function dispOuIndispCarro($placa){
        $carro = Carro::find($placa);
        $carro->disponivel= !$carro->disponivel;
        $carro->save();
    }

    public static function alugar($placa)
    {
        $carro = Carro::find($placa);
        $carro->alugado=true;
        $carro->save();
    }

    public static function encerrarAluguel($placa)
    {
        $carro = Carro::find($placa);
        $carro->alugado=false;
        $carro->save();
    }
    
}
