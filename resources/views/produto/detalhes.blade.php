@extends('layout.principal')

@section('conteudo')
<h1>Detalhes do produto {{$p->nome}}</h1>

<ul>
    <li>Valor: {{$p->valor}}</li>
    <li>Descrição: {{$p->descricao or 'não tem descrição'}}</li>
    <li>Quantidade em estoque: {{$p->quantidade}}</li>
</ul>
@stop