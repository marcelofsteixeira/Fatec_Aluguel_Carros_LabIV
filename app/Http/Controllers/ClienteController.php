<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
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
        $clientes = Cliente::all();

        return view('clientes.index', compact("clientes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cliente::create($request->all());

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        // select * from cliente where id = $id;

        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cpf)
    {

        DB::table('cliente')
            ->where('cpf', $cpf)
            ->update(
                [
                    'cpf' => $request->cpf,
                    'nome' => $request->nome,
                    'rg' => $request->rg,
                    'endereco' => $request->endereco,
                    'cep' => $request->cep,
                    'cel' => $request->cel,
                    'tel' => $request->tel,
                    'email' => $request->email


                    ]
            );

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);

        $clientes = Cliente::all();

        return view('clientes.index', compact('clientes'));
    }
}
