<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelContato;
use App\Services\CriadorDeContato;
use App\Services\RemovedorDeContato;

class ContatoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contatos = ModelContato::all();
        return view('contatos.listaContato', ['contatos' => $contatos]);
    }

    public function show($id)
    {
        $contato = ModelContato::findOrFail($id);
        return view('contatos.visualizaContato', ['contato' => $contato]);
    }
    
    public function create()
    {
        return view('contatos.criaContato');
    }

    public function store(Request $request, CriadorDeContato $criadorDeContato)
    {
        $contato = $criadorDeContato->criarContato(
            $request->nome,
            $request->cpf,
            $request->rg
        );

        $request->session()->flash(
            'mensagem', "Contato {$contato->nome} criado com sucesso");

        return redirect()->route('lista_contato');
    }

    public function update(Request $request, $idContato)
    {
        $contato = ModelContato::findOrFail($idContato);
        $contato->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'rg' => $request->rg
        ]);

        $request->session()->flash(
            'mensagem', "Contato {$contato->nome} atualizado com sucesso");

        return redirect()->route('lista_contato', $idContato);
    }

    public function destroy($idContato, RemovedorDeContato $removedorDeContato)
    {
        $removedorDeContato->removerContato($idContato);
        return redirect()->route('lista_contato');
    }

}