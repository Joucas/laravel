@extends('site.layouts.basico')

@section('titulo', 'Página de Contato')

@section('conteudo')
    @include('site.layouts._partials.menu')
    <h1>Contato</h1>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">

                <form action="{{ route('site.contato') }}" method="GET">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Mensagem</label>
                        <input type="text" class="form-control" id="message" name="message">
                    </div>

                    <div class="mb-3">
                        <select name="motivo" id="motivo" class="form-select">
                            <option value="1">Qual o motivo do contato?</option>
                            <option value="2">Reclamação</option>
                            <option value="3">Dúvida</option>
                            <option value="3">Elogio</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            </div>
        </div>
    </div>

@endsection