<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baralho;

class BaralhoController extends Controller
{
    function index(Baralho $bara)
    {
        $baralhos = $bara->all();
        
        return view('painel.baralhospage.formBaralho', compact('baralhos'));
    }

    function cadastroBaralho(Request $req, Baralho $bara)
    {
        //validar os campos
        $dados = $req->all();

        if($dados['nome'] != ''){
            $form = $bara->create($dados);
           
            return redirect()->action('BaralhoController@index')->with('msg', 'Cadastrado com Sucesso!');
        }
       
        
        return redirect()->action('BaralhoController@index')->with('msg', 'Não foi possível cadastrar, verifique os dados e tente novamente!');
    }
}
