@extends('layout.principal')

@section('conteudo')

    @if (empty($produtos))
    <div class="alert alert-danger">Você não tem nenhum produto cadastrado.</div>

    @else
    <h1>Listagem de produtos com Laravel</h1>

    <table class="table table-bordered table-hover">

        <thead class="thead-dark">
        <tr> 
            <th scope="col">Nome</td>
            <th scope="col">Valor</th>
            <th scope="col">Descrição</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Tamanho</th>
            <th scope="col">Detalhes</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($produtos as $p)
        <tr class="table-{{ $p->quantidade <=1 ? 'danger' : ''}}"> 
            <td>{{$p->nome}}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->quantidade}}</td>
            <td>{{$p->tamanho}}</td>
            <td><a href="/produtos/mostra/{{$p->id}}"><i class="material-icons">search</i></a></td>
            <td><a href="/produtos/remove/{{$p->id}}"><i class="material-icons">delete</i></a></td>
        </tr>
        @endforeach

    </tbody>
    </table>
    
    @endif

    @if (old('nome'))
    <div class="alert alert-success">
        Produto {{old('nome')}} adicionado com sucesso!
    </div>
    @endif

    <h4>
        <span class="badge badge-danger float-right">Um ou menos itens no estoque</span>
    </h4>
@stop