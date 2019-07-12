@extends('layout.site')

@section('titulo', 'Contato')

@section('conteudo')

    <h3>Essa é a view index</h3>

    @foreach($contato as $contatos)
    <p>{{ $contatos-> nome }}</p>
    <p>{{ $contatos-> tel }}</p>
    @endforeach

@endsection