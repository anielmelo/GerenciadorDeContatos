@extends('layout')

@section('content')

    <div class="container">
        <div class="jumbotron">
            <h1>Contato {{ $contato->id }}</h1>
        </div>

        <ul class="list-group">
            <li class="list-group-item">
                <strong>Nome:</strong> {{ $contato->nome }}
            </li>
            <li class="list-group-item">
                <strong>CPF:</strong> {{ $contato->cpf }}
            </li>
            <li class="list-group-item">
                <strong>RG:</strong> {{ $contato->rg }}
            </li>
        </ul>
        <a href="{{ route('lista_contato') }}" class="btn btn-primary mt-2">VOLTAR</a>

        <button class="btn btn-success mt-2" id="btnAtualizar">ATUALIZAR</button>

        <form id="formAtualizar" action="/lista_contato/contato/{{ $contato->id }}" method="post" style="display: none;">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $contato->nome }}" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $contato->cpf }}" placeholder="CPF">
            </div>
            <div class="form-group">
                <label for="rg">RG:</label>
                <input type="text" class="form-control" id="rg" name="rg" value="{{ $contato->rg }}" placeholder="RG">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Salvar</button>
        </form>
    </div>

    <script>
        document.getElementById('btnAtualizar').addEventListener('click', function() {
            document.getElementById('formAtualizar').style.display = 'block';
        });
    </script>

@endsection