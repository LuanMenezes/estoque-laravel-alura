<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request
use Illuminate\Support\Facades\DB;
use estoque\Produto;

class ProdutoController extends Controller
{
    public function lista(){
    	//$produtos = DB::select('select * from produtos');

        /* Usando a Classe Produto para buscar os registros no banco de dados */
        $produtos = Produto::all();
        return view('listagem')->with('produtos', $produtos);
    }

    public function mostra(Request $request){
        $id = $request->input('id', '1');

        if(empty($id)) {
            return "Esse produto não existe";
        }

        /* Usando a Classe Produto para buscar os registros no banco de dados */
        $produto = Produto::find($id);

        //$produto = DB::select('select * from produtos where id = ?', [$id]);
        return view('detalhes')->with('p', $produto);
    }

    public function mostras(Request $request){
        $id = $request->route('id');        
        
        if(empty($id)) {
            return "Esse produto não existe";
        }

        $produto = DB::select('select * from produtos where id = ?', [$id]);
        return view('detalhes')->with('p', $produto[0]);
    }

    public function novo(){
        return view('formulario');
    }

    public function adicionaAntigo(Request $request){
        $nome = $request->input('nome');
        $quantidade = $request->input('quantidade');
        $valor = $request->input('valor');
        $descricao = $request->input('descricao');

        DB::insert('insert into produtos(nome, quantidade, valor, descricao) values(?, ?, ?, ?)', array($nome, $quantidade, $valor, $descricao));

        //return view('adicionado')->with('nome', $nome);
        return redirect('/produtos')->withInput($request->only('nome'));
        /* Outro tipo de redirect */
        //return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function adiciona(Request $request){
        /*
        $produto = new Produto();
        $produto->nome = $request->input('nome');
        $produto->quantidade = $request->input('quantidade');
        $produto->valor = $request->input('valor');
        $produto->descricao = $request->input('descricao');
        */

        //segunda forma de pegar todos os parametros e criar os produtos da requisição
        //$params = $request->all();
        //$produtos = new Produto($params);

        //$produtos->save();

        //terceira forma de pegar todos os parametros e criar os produtos da requisição
        Produto::create($request->all());

        return redirect('/produtos')->withInput();
    }
}
