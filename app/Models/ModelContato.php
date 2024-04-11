<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelContato extends Model
{
    protected $table='contatos';
    protected $fillable=[
        'id',
        'cpf',
        'nome',
        'rg'
    ];

}
