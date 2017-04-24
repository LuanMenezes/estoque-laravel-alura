@extends('principal')
@section('conteudo')
        <h1>Listagem de Produtos</h1>
        @if(empty($produtos))

        <div class="alert alert-danger">
          Você não tem nenhum produto cadastrado.
        </div>
        @else
        <table class="table table-striped table-bordered table-hover">
        @foreach($produtos as $p)
            <tr class="{{$p->quantidade <=10 ? 'danger' : ''}}">
                <td>Nome: {{$p->nome}}</td>
                <td>Valor: {{$p->valor}}</td>
                <td>Quantidade: {{$p->quantidade}}</td>
                <td>Descrição: {{$p->descricao}}</td>
                <td>Tamanho: {{$p->tamanho}}</td>
                <td><a href="/produtos/mostra?id={{$p->id}}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
                <td><a href="/produtos/remove?id={{$p->id}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
            </tr>  
        @endforeach
        @endif
        </table>

        @if(old('nome'))
        <div class="alert alert-info">
          Produto {{ old('nome')  }} adicionado com sucesso!
        </div>
        @endif
    <h4>
      <span class="label label-danger pull-right">
        Um ou menos itens no estoque
      </span>
    </h4>
@stop