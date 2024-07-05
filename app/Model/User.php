<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'usuario';

    protected $fillable = [
        'nome_completo',
        'naturalidade',
        'nome_pai',
        'nome_mae',
        'nascimento',
        'cpf',
        'rg',
        'tipo_sanguineo',
        'telefone',
        'endereco',
        'bairro',
        'numero',
        'cep',
        'responsavel_legal',
        'nome_responsavel',
        'cpf_responsavel',
        'orgao_exp_responsavel',
        'endereco_responsavel',
        'bairro_responsavel',
        'telefone_responsavel',
        'cidade_responsavel',
        'estado_responsavel',
        'email',
        'repetir_email',
        'laudo_medico',
        'procuracao',
    ];

    protected $dates = ['nascimento'];

    public $timestamps = false;
}
