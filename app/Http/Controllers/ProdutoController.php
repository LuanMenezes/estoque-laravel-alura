<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista(){

    	$html = '<h1>Meus produtos: </h1>';
    	$produtos = DB::select('select * from produtos');

    	foreach ($produtos as $p) {
    		//$html .= '<br/><br/> Nome: '. $p->nome; 
    		//$html .= '<br/> Valor: '. $p->valor;
    		//$html .= '<br/> Descricao: '. $p->descricao;
    		//$html .= '<br/> Quantidade: '. $p->quantidade;

            $html .= '<li> Nome: '. $p->nome .', Descrição: '. $p->descricao .'</li><br/>';
    	}
    	//dd($produtos);
    	//return $html;
        return view('listagem')->with('produtos', $produtos);
    }
}
