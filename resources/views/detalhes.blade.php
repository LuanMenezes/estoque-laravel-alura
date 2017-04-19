@extends('principal')
@section('conteudo')
        <h1>Detalhe do Produto {{$p->nome}} </h1>
        <ul>
            <li>
                Descrição: {{$p->descricao}}
            </li>
        </ul>
@stop