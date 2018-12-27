@extends('welcome')
@section('conteudo') <!--o section está delcarando que tudo o que está entre o section e endsection é conteúdo-->
    <div class="row">
        <div class="col s12 ">
            <div class="card blue-grey darken-1">
                <div class="card-content ">
                    <span class="card-title">Listagem de Alunos</span>
                    <div align="center">
                        <span> Listagem de Alunos</span>
                    </div>
                    <div>
                        <table id="tabela" align="center" border="line">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Curso</th>
                                <th>Semestre</th>
                                <th colspan="2">Ações</th>
                            </tr>
                            <tr>
                            @foreach($alunos as $aluno)
                                <tr>
                                    <td><a class="btn red white-text" href="{{route('aluno.deletar', $aluno->id_aluno)}}">
                                            <i class="material-icons">fastfood</i>
                                        </a></td>
                                    <td><a class="btn blue white-text" href="{{route('aluno.form', $aluno->id_aluno)}}">
                                            <i class="material-icons">fastfood</i>
                                        </a></td>
                                    <td>{{$aluno->id_aluno}}</td>
                                    <td>{{$aluno->tx_nome}}</td>
                                    <td>{{$aluno->tx_sobrenome}}</td>
                                    <td>{{$aluno->tx_curso}}</td>
                                    <td>{{$aluno->nu_semestre}}</td>
                                </tr>
                                @endforeach
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed-action-btn">
        <a href="{{route('aluno.form')}}" class="btn-floating btn-large red white-text"><i class="material-icons">add</i></a> <!--Botão que direciona para a rota-->
    </div>
@endsection