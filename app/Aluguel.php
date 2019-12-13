<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Aluguel extends Model
{
    protected $table="aluguel";
    public $keyType = 'string';

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

    protected $primaryKey = 'id';

    
    public function incidentes()
    {
        return $this->hasMany('App\Incidente');
    }

    public function carro()
    {
        return $this->belongsTo(Carro::class, 'carro_id');
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public static function encerrarAluguel($id){
        $aluguel = Aluguel::find($id);
        $date = Carbon::now();
        $aluguel->data_entrega= $date;
        Carro::encerrarAluguel($aluguel->carro_id);
        $aluguel->save();
    }
}
