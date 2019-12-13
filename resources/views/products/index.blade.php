@extends('adminlte::page')

@section('title', 'Cadastro de Produtos')

@section('content_header')
    <h1>Cadastro de Produtos</h1>
@stop

@section('content')

<div class="panel panel-default">
  <div class="panel-heading clearfix">
    <div class="pull-rigth">
    <a href="{{route('products.index') }}" class="btn btn-info"><i class="fas fa-fx fa-sync-alt"></i> Atualizar a Tela</a>
    <a href="{{route('products.create') }}" class="btn btn-success"><i class="fas fa-fx fa-plus"></i> Incluir Novo Registro</a>
  </div>
</div> 

<div class="panel body">
    <table id="table-products" class="table table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Quantidade</th>
          <th>Preço de Custo</th>
          <th>Preço de Venda</th>
          <th>Fornecedor</th>
          <th>Marca</th>
          <th>Categoria</th>
        </tr>
      </thead>
  
      <tbody>
        @foreach($products as $products)
        <tr>
          <td>{{$products->id}}</td>
          <td>{{$products->name}}</td>
          <td>{{$products->description}}</td>
          <td>{{$products->amount}}</td>
          <td>{{$products->price_cost}}</td>
          <td>{{$products->price_resale}}</td>
          <td>{{$products->providers_id}}</td>
          <td>{{$products->brands_id}}</td>
          <td>{{$products->categories_id}}</td>
          <td>
            <a href="{{ route('products.show', $products->id) }}" class="btn btn-warning"><i class="fas fa-fx fa-edit"></i></a>
            <a href="{{ route('products.edit', $products->id) }}" class="btn btn-info"><i class="fas fa-fx fa-eye"></i></a>
            <!-- botão exclusão -->
            <form action="{{ route('products.destroy', $products->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este registro?');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-danger">
                                    <i class="fas fa-fx fa-trash-alt"></i>
                                </button>
            </form>
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
    $('#table-products').DataTable({
      language: {
        url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
      },
    });
  });
</script>
@stop