<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\User;
use Illuminate\Support\Facades\Auth;


class ProdutosController extends Controller
{
    public function exibirProdutos()
    {
        $Produtos = Produto::all();
        return view('produtos',['produtos'=>$Produtos]);
    }
    public function exibirProduto($id)
    {
        $Produto = Produto::where('id',$id)->first();
        return view('produto',['produto'=>$Produto]);

    }
    public function teste()
    {
        $usuario = User::where('id',17)->first();
        $produtos = $usuario->produtos->all();
        dd($produtos);
    }
}
