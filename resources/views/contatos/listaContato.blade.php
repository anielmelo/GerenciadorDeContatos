@extends('layout')

@section('content')

    <div class="container">
        <div class="jumbotron">
            <h1>Contatos</h1>
        </div>

        <a href="{{ route('cria') }}" class="btn btn-dark mb-2">Adicionar</a>
        <ul class="list-group">
            <?php foreach ($contatos as $contato): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>Nome: {{ $contato->nome }} | RG: {{ $contato->rg }} | CPF: {{ $contato->cpf }} </span>
                    <div class="btn-group">
                        <form action="/lista_contato/contato/{{ $contato->id }}" method="get">
                            @csrf
                            <button class="btn btn-primary">Visualizar</button>
                        </form>
                        <form method="post" action="lista_contato/remover/contato/{{ $contato->id }}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $contato->nome )}}?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

@endsection