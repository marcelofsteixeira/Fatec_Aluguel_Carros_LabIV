<?php

namespace App\Http\Controllers;

use App\Carro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarroController extends Controller
{
    /**
     * index - Receber dados de uma tabela e enviar para
     *         uma view.
     * create - Exibir um form para que o usuário possa
     *          cadastrar um novo registro
     * store - Recebe os dados form (create) e enviar
     *         para o BD
     * show - Exibe um determinado registro
     * edit - Recebe os dados de um registro e envia
     *        para um form para ser atualizado
     * update - Recebe os dados de um form (edit) e
     *          atualizado no BD
     * destroy - Deleta um registro do BD
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carros = Carro::all();

        return view('carros.index', compact("carros"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Carro::create($request->all());

        return redirect()->route('carros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carro = Carro::find($id);
        // select * from carro where id = $id;

        return view('carros.show', compact('carro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carro = Carro::find($id);

        return view('carros.edit', compact('carro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carro  $carros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        DB::table('carro')
            ->where('id', $id)
            ->update(
                [
                    'placa' => $request->placa,
                    'cor' => $request->cor,
                    'marca' => $request->marca,
                    'modelo' => $request->modelo,
                    'renavan' => $request->renavan,
                    'diaria' => $request->diaria
                
                ]
            );

        return redirect()->route('carros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carro::destroy($id);

        $carros = Carro::all();

        return view('carros.index', compact('carros'));
    }
}
