@extends('welcome')
@section('conteudo')
    <div class="row">
        <div class="col s12">
            <form method="post" action="{{route('aluno.salvarAluno')}}">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Formulário</span>
                        <br>
                            <input type="hidden" name="_token" value="{{csrf_token()}}" >
                            <input type="hidden" name="id_aluno" value="{{ $aluno->id_aluno }}" >

                        <div class="row">
                            <div class="input-field col s12 m6 16">
                                <input id="nome" type="text" name="tx_nome" placeholder="Nome" value="{{$aluno->tx_nome}}">
                                <label for="nome">Nome</label>
                            </div>

                            <div class="input-field col s6 m6 16">
                                <input type="text" name="tx_sobrenome" placeholder="Sobrenome" value="{{$aluno->tx_sobrenome}}">
                                <label for="tx_sobrenome">Sobrenome</label>
                            </div>

                            <div class="input-field col s6 m6 16">
                                <input type="text" name="tx_curso" placeholder="Curso" value="{{$aluno->tx_curso}}">
                                <label for="tx_curso">Curso</label>
                            </div>

                            <div class="input-field col s6 m6 16">
                                <input type="number" name="nu_semestre" placeholder="Semestre" value="{{$aluno->nu_semestre}}">
                                <label for="nu_semestre">Semestre</label>
                            </div>

                        </div>
                    <div class="card-action right-align">
                        <a class="btn red white-text" href="{{ route("aluno.list") }}">
                            VOLTAR
                        </a>
                        <button type="submit" class="btn green white-text">
                            SALVAR
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection