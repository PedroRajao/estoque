<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use estoque\Produto;
use estoque\Categoria;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['adiciona', 'remove']]);
    }

    public function lista()
    {
        $produtos = Produto::all();
        return view('produto.listagem')->withProdutos($produtos);
    }

    public function mostra($id)
    {
        $produto = Produto::find($id);

        if (empty($produto)) {
            return "Esse produto não existe";
        }

        return view('produto.detalhes')->with('p', $produto);
    }

    public function remove($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function novo()
    {
        return view('produto.formulario')->with('categorias', Categoria::all());
    }

    public function adiciona()
    {
        $validator = Validator::make(
            [
                'nome' => Request::input('nome'),
                'valor' => Request::input('valor'),
                'descricao' => Request::input('descricao'),
                'quantidade' => Request::input('quantidade')
                ],
            [
                'nome' => 'required|min:5',
                'valor' => 'required|numeric',
                'descricao' => 'nullable|max:255',
                'quantidade' => 'required|numeric'
                ]
        );

        if ($validator->fails()) {
            return redirect()->action('ProdutoController@novo')->withErrors($validator)->withInput(Request::flash());
        }

        Produto::create(Request::all());
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }
}
