@extends('adminlte::page')

@section('title', 'Cadastro de Categorias')

@section('content_header')
    <h1>Cadastro de Categorias</h1>
@stop

@section('content')

  <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}

    <div class="panel panel-default">
      <div class="panel-heading">
          Informe o nome da Categoria.
        </div> 

      <div class="panel-body">

          <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Categoria...">
            </div>
            
        </div>  

        <div class="panel-footer">
          <a href="{{ route('categories.index') }}" class="btn btn-default">Voltar</a>
          <button type="submit" class="btn btn-success">Gravar</button>
          <button type="cancel" class="btn btn-danger">Deletar</button>   

        </div>

    </div>
  </form>      

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop