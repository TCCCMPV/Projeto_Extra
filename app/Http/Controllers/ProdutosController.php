<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Auth;


class ProdutosController extends Controller
{
    public function exibirProdutos()
    {
        $produtos = Produto::orderBy('created_at','desc')->get();
        return view('produtos',['produtos'=>$produtos]);
    }
    public function criarproduto(){
        return View('novoproduto');
    }
    public function exibirInformacoes(Request $request)
    {
        $produto = new Produto;

        $nome = $request->input('nome');
        $valor = floatval($request->input('valor'));
        $descricao = $request->input('descricao');

        $user = Auth::user();
        $user_id = $user->id;

        $produto->nome = $nome;
        $produto->valor = $valor;
        $produto->description = $descricao;
        $produto->user_id = $user_id;
        $produto->save();

        return redirect()->route('produtos'); //View('exibirinformacoes',['nome'=>$nome,'valor'=>$valor,'descricao'=>$descricao]);
    }
    public function exibirproduto($id)
    {
        $produto= Produto::where('id',$id)->first();
        dd($produto);
    }
}
