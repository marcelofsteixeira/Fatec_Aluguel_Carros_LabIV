<?php

namespace App\Http\Controllers;

use App\Aluguel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AluguelController extends Controller
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
        $alugueis = Aluguel::all();

        return view('alugueis.index', compact("alugueis"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alugueis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aluguel::create($request->all());

        return redirect()->route('alugueis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aluguel  $aluguel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluguel = aluguel::find($id);
        // select * from aluguel where id = $id;

        return view('alugueis.show', compact('aluguel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluguel  $aluguel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluguel = Aluguel::find($id);

        return view('alugueis.edit', compact('aluguel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluguel  $aluguel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        DB::table('aluguel')
            ->where('id', $id)
            ->update(
                [
                    'cliente_id' => $request->cliente_id,
                    'carro_id' => $request->carro_id,
                    'preco' => $request->preco,
                    'funcionario_id' => $request->funcionario_id,
                    'data_aluguel' => $request->data_aluguel,
                    'data_entrega_esperada' => $request->data_entrega_esperada,
                    'data_entrega' => $request->data_entrega

                ]
            );

        return redirect()->route('alugueis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluguel  $aluguel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aluguel::destroy($id);

        $alugueis = Aluguel::all();

        return view('alugueis.index', compact('alugueis'));
    }
}
