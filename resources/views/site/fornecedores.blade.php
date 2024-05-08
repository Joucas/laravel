@extends('site.layouts.basico')

@section('titulo', 'Página de Fornecedores')

@section('conteudo')
    @include('site.layouts._partials.menu')

    <h1>Fornecedores</h1>

    @isset($fornecedores)
        @foreach($fornecedores as $indice => $fornecedor)
            Fornecedor: {{ $fornecedor['nome'] }}
            <br/>
            Status: {{ $fornecedor['status'] ?? 'Sem status definido! '}}
            <br/>
            <hr/>
        @endforeach
    @endisset

@endsection