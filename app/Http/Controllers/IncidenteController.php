<?php

namespace App\Http\Controllers;

use App\Incidente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncidenteController extends Controller
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
        $incidentes = Incidente::all();

        return view('incidentes.index', compact("incidentes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incidentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Incidente::create($request->all());

        return redirect()->route('incidentes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Incidente  $incidente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $incidente = Incidente::find($id);
        // select * from incidente where id = $id;

        return view('incidentes.show', compact('incidente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Incidente  $incidente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incidente = Incidente::find($id);

        return view('incidentes.edit', compact('incidente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incidente  $incidente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        DB::table('incidente')
            ->where('id', $id)
            ->update(
                [
                    'aluguel_id' => $request->aluguel_id,
                    'data' => $request->data,
                    'descricao' => $request->descricao,
                    'multa' => $request->multa

                    ]
            );

        return redirect()->route('incidentes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incidente  $incidente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Incidente::destroy($id);

        $incidentes = Incidente::all();

        return view('incidentes.index', compact('incidentes'));
    }
}
