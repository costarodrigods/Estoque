@extends('adminlte::page')

@section('title', 'Cadastro de Produtos')

@section('content_header')
    <h1>Cadastro de Produtos</h1>
@stop

@section('content')

  <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}

    <div class="panel panel-default">
      <div class="panel-heading">
          Informe os dados da Marca.
        </div> 

      <div class="panel-body">

          <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Produto:...">
          </div>
          <div class="form-group">
              <label for="description">Descrição</label>
              <input type="text" id="description" name="description" class="form-control" placeholder="Descrição Produto:...">
          </div>
          <div class="form-group">
              <label for="amount">Quantidade</label>
              <input type="text" id="amount" name="amount" class="form-control" placeholder="Quantidade Produto:...">
          </div>
          <div class="form-group">
              <label for="price_cost">Preço de custo</label>
              <input type="text" id="price_cost" name="price_cost" class="form-control" placeholder="Preço de Custo do Produto:...">
          </div>
          <div class="form-group">
              <label for="price_resale">Preço de revenda</label>
              <input type="text" id="price_resale" name="price_resale" class="form-control" placeholder="Preço de Revenda do Produto:...">
          </div>
          <div class="form-group">
              <label for="providers_id">Fornecedor</label>
              <input type="text" id="providers_id" name="providers_id" class="form-control" placeholder="Fornecedor do Produto:...">
          </div>
          <div class="form-group">
              <label for="brands_id">Marca</label>
              <input type="text" id="brands_id" name="brands_id" class="form-control" placeholder="Marca do Produto:...">
          </div>
          <div class="form-group">
              <label for="categories_id">Categoria</label>
              <input type="text" id="categories_id" name="categories_id" class="form-control" placeholder="Categoria do Produto:...">
          </div>
        </div>  

        <div class="panel-footer">
          <a href="{{ route('products.index') }}" class="btn btn-default">Voltar</a>
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