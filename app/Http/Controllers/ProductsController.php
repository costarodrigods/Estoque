<?php
/* CREATE RODRIGO COSTA 11/12/2019 
     * index - Exibir uma relaçao de registro na "tela"
     * create - Exibir um formulário HTML para ser solicitado dados ao usuário
     * store - Recebe os dados do formulário (via create) e envia para o BD.
     * show - Exibir uma página com os dados de um determinado registro.
     * edit - Exibir um formulário com os dados de um determinado registro.
     * update - Recebe os dados do formulário (via edit) e atualizado no BD.
     * destroy - Exclui um determinado registro do BD.
*/
namespace App\Http\Controllers;
use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller{
    public function index()
    {
        $products = Products::All();
        return view('products.index', compact('products'));
    }
    public function create()
    {
        return view('products.create',compact('products'));
    }

    public function store(Request $request)
    {
        Products::create($request->all());
        return redirect()->route('products.index');
    }

    public function show($id)
    {
      $products = Products::find($id);
      return view ('products.show', compact('products'));
    }

    public function edit($id)
    {
      $products = Products::find($id);
      return view ('products.edit', compact('products'));
    }

    public function update(Request $request, Products $products)
    {
    DB::table('products')
      ->where('id', $id)
      ->update(
      [
        'name' => $request->name,
        'description' => $request->description,
        'amount' => $request ->amount,
        'price_cost' => $request ->price_cost,
        'price_resale' => $request ->price_resale,
        'providers_id' => $request ->providers_id,
        'brands_id' => $request ->brands_id,
        'categories_id' => $request ->categories_id,
      ]);
      return redirect()->route('products.index');
    }
  
    public function destroy($id)
    {
    Products::destroy($id);
    return redirect()->route('products.index');
    }
}
