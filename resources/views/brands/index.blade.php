@extends('adminlte::page')

@section('title', 'Cadastro de Marcas')

@section('content_header')
    <h1>Cadastro de Marcas</h1>
@stop

@section('content')

<div class="panel panel-default">
  <div class="panel-heading clearfix">
    <div class="pull-rigth">
    <a href="{{route('brands.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a Tela</a>
    <a href="{{route('brands.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir Novo Registro</a>
  </div>
</div> 

<div class="panel body">
    <table id="table-brands" class="table table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
        </tr>
      </thead>
  
      <tbody>
        @foreach($brands as $brands)
        <tr>
          <td>{{$brands->id}}</td>
          <td>{{$brands->name}}</td>
          <td>
          <a href="{{ route('brands.show', $brands->id) }}" class="btn btn-warning"><i class="fas fa-fx fa-edit"></i></a>
            <a href="{{ route('brands.edit', $brands->id) }}" class="btn btn-info"><i class="fas fa-fx fa-eye"></i></a>
            <!-- botão exclusão -->
            <form action="{{ route('brands.destroy', $brands->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
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
    $('#table-brands').DataTable({
      language: {
        url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
      },
    });
  });
</script>
@stop