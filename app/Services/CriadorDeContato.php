<?php

namespace App\Services;

use App\Models\ModelContato;
use Illuminate\Support\Facades\DB;

class CriadorDeContato
{
    public function criarContato(string $nomeContato, string $cpfContato, string $rgContato): ModelContato
    {
        DB::beginTransaction();
        $contato = ModelContato::create(['nome' => $nomeContato, 'cpf' => $cpfContato, 'rg' => $rgContato]);
        DB::commit();

        return $contato;
    }
}