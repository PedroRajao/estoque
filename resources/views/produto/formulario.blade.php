@extends('layout.principal')

@section('conteudo')

<h1>Novo produto</h1>

<form action="/produtos/adiciona" method="post">

    <input type="hidden" name="_token" value="{{csrf_token()}}" />

    <div class-"form-group">
    <label>Nome</label>
    <input name="nome" class="form-control" value="{{ old('nome') }}" />
    </div>

    <div class-"form-group">
    <label>Valor</label>
    <input name="valor" value="{{ old('valor') }}" class="form-control"/>
    </div>

    <div class-"form-group">
    <label>Quantidade</label>
    <input name="quantidade" value="{{ old('quantidade') }}" class="form-control"/>
    </div>

    <div class-"form-group">
        <label>Tamanho</label>
        <input name="tamanho" value="{{ old('tamanho') }}" class="form-control"/>
        </div>

    <div class-"form-group">
    <label>Descrição</label>
    <textarea name="descricao" value="{{ old('descricao') }}" class="form-control"></textarea>
    </div>

    <div class="form-group">
    <label>Categoria</label>
      <select name="categoria_id" class="form-control">
          @foreach($categorias as $c)
          <option value="{{$c->id}}">{{$c->nome}}</option>
          @endforeach
      </select>
    </div>

    <button class="btn btn-primary" type="submit">Adicionar</button>
</form>

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@stop