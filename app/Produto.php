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
    protected $fillable = [
        'nome', 'valor', 'descricao', 'quantidade',
    ];
}
