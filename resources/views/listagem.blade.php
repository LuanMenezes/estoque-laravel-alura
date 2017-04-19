@extends('principal')
@section('conteudo')
        <h1>Listagem de Produtos</h1>
        <table class="table">
        @foreach($produtos as $p)
            <tr class="{{$p->quantidade <=10 ? 'danger' : ''}}">
                <td>Nome: {{$p->nome}}</td>
                <td>Valor: {{$p->valor}}</td>
                <td>Quantidade: {{$p->quantidade}}</td>
                <td>Descrição: {{$p->descricao}}</td>
                <td><a href="/produtos/mostra?id={{$p->id}}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
            </tr>  
        @endforeach
        </table>
@stop