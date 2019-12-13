@extends('adminlte::page')

@section('title', 'Cadastro de Fornecedores')

@section('content_header')
    <h1>Cadastro de Fornecedores</h1>
@stop

@section('content')

<div class="panel panel-default">
  <div class="panel-heading clearfix">
    <div class="pull-rigth">
    <a href="{{route('providers.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a Tela</a>
    <a href="{{route('providers.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir Novo Registro</a>
  </div>
</div> 

<div class="panel body">
    <table id="table-providers" class="table table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>CNPJ</th>
        </tr>
      </thead>
  
      <tbody>
        @foreach($providers as $providers)
        <tr>
          <td>{{$providers->id}}</td>
          <td>{{$providers->name}}</td>
          <td>{{$providers->cnpj}}</td>
          <td>
          <a href="{{ route('providers.show', $providers->id) }}" class="btn btn-warning"><i class="fas fa-fx fa-edit"></i></a>
          <a href="{{ route('providers.edit', $providers->id) }}" class="btn btn-info"><i class="fas fa-fx fa-eye"></i></a>
          <!-- botão exclusão -->
          <form action="{{ route('providers.destroy', $providers->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-danger">
                                    <i class="fas fa-fx fa-trash-alt"></i>
                                </button>
          </td>
        </tr>
        @endforeach
    </tbody>

    
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
  $(document).ready(function() {
    $('#table-providers').DataTable({
      language: {
        url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
      },
    });
  });
</script>
@stop