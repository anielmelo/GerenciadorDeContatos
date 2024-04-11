@extends('layout')

@section('content')
    <div class="container">

        
        <div class="jumbotron">
            <h1>Adicionar Contato</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post">
        @csrf
            <div class="row">

                <div class="col col-4">
                    <label for="nome" class="">NOME</label>
                    <input type="text" class="form-control" name="nome" id="nome">
                </div>

                <div class="col col-2">
                    <label for="cpf" class="">CPF</label>
                    <input type="number" class="form-control" name="cpf" id="cpf">
                </div>

            </div>
            <div class="row">

                <div class="col col-2">
                    <label for="rg" class="">RG</label>
                    <input type="number" class="form-control" name="rg" id="rg">
                </div>

            </div>
            <button class="btn btn-primary mt-2">Adicionar</button>
        </form>
    </div>
@endsection