<?php

namespace App\Services;

use App\Models\ModelContato;
use App\Models\ModelEndereco;
use Illuminate\Support\Facades\DB;

class RemovedorDeContato
{
    public function removerContato(int $idContato)
    {
        $contato = ModelContato::findOrFail($idContato);
        $contato->delete();
    }
}