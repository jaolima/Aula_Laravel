<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{

    function getAlunos()
    {
        $alunos = Aluno::all();
        return view('aluno/list', compact('alunos'));
    }

    function salvarAluno(Request $request)
    {

        if ($request->id_aluno) {
            Aluno::find($request->id_aluno)->update($request->input());
        } else {
            Aluno::create($request->input());
        }
        return redirect()->route('aluno.list'); //redirecionar para a listagem
        //print_r imprime vetores
        //echo
        //dd
        //print
    }

    function deletarAluno($id_aluno)
    {

        Aluno::find($id_aluno)->delete(); //find acha alguem no model
        return redirect()->route('aluno.list');
    }

    function alterarAluno()
    {

    }

    public function form($id_aluno = null)
    {

        //verificar se a variável tem algo
        //se tiver algo é alterar
        // $aluno = $id_aluno ? Aluno::find($id_aluno) : $aluno = new Aluno();
        $aluno = new Aluno();
        if (isset($id_aluno)){
            $aluno = Aluno::find($id_aluno);
            return view('aluno/form', compact('aluno'));
        }
        return view('aluno/form', compact('aluno'));
    }

}
