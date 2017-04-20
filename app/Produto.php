<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //Isso faz com que o Modelo ignore os campos de data da criação e data da atualização
    //public $timestamps = false;

    protected $table = 'produtos';

    protected $fillable = [
        'nome', 'valor', 'descricao', 'quantidade',
    ];
}
