<?php

namespace estoque\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use Auth;

class LoginEstoqueController extends Controller
{
    public function form(){
    	return view('form_login');
    }

    public function login(Request $request){
    	$credenciais = $request->only('email', 'password');

    	if(Auth::attempt($credenciais)){
    		return 'Usuario logado com sucesso';
    	}
    	return 'Usuario não existe';
    }
}
