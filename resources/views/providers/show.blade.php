@extends('adminlte::page')

@section('title', 'Cadastro de Fornecedores')

@section('content_header')
    <h1>Cadastro de Fornecedores</h1>
@stop

@section('content')

  <form action="{{ route('providers.store') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}

    <div class="panel panel-default">
      <div class="panel-heading">
          Informe os dados do Fornecedor.
        </div> 

      <div class="panel-body">

          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nome do fornecedor...">
          </div>
          <div class="form-group">
          <label for="cnpj">CNPJ</label>
            <input type="text" id="cnpj" name="cnpj" class="form-control" placeholder="CNPJ do fornecedor...">
          </div>
            
        </div>  

        <div class="panel-footer">
          <a href="{{ route('providers.index') }}" class="btn btn-default">Voltar</a>
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