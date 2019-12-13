<?php

namespace App\Http\Controllers;
use App\Providers;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index()
    {
      $providers = Providers::all();
      return view('providers.index', compact('providers'));
    }

    public function create()
    {
      return view('providers.create');
    }

    public function store(Request $request)
    {
      Providers::create($request->all());
      return redirect()->route('providers.index');
    }

    public function show($id)
    {
      $providers = Providers::find($id);
      return view ('providers.show', compact('providers'));
    }

    public function edit($id)
    {
      $providers = Providers::find($id);
      return view ('providers.edit', compact('providers'));
    }

    public function update(Request $request, Providers $providers)
    {
    DB::table('providers')
      ->where('id', $id)
      ->update(
      [
        'name' => $request->name,
        'cnpj' => $request->cnpj,
      ]);
      return redirect()->route('providers.index');
    }
  
    public function destroy($id)
    {
    Providers::destroy($id);
    return redirect()->route('providers.index');
    }
}
