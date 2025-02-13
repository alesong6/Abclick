<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    public function cadastra(Request $dados)
    {
        $dados->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'imagem' => 'required',
        ]);

        $portfolio = new Usuarios();
        $portfolio->titulo = $dados->titulo;
        $portfolio->descricao = $dados->descricao;
        $portfolio->imagem = "#";

        $portfolio->save();

        return redirect('/cadastro');
    }

    public function buscaDados (){

        $portfolio = Usuarios::all();
        return view('painel.cadastro', ['portfolios' => $portfolio]);
    }

    public function apagaDados($id) {
        $portfolio = new Usuarios();

        $portfolio->destroy($id);

        return redirect('/');
    }

}
