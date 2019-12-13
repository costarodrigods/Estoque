<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
      return view('categories.create');
    }

    public function store(Request $request)
    {
      Categories::create($request->all());
      return redirect()->route('categories.index');
    
    }

    public function show($id)
    {
      $categories = Categories::find($id);
      return view ('categories.show', compact('categories'));
    }

    public function edit($id)
    {
      $categories = Categories::find($id);
      return view ('categories.edit', compact('categories'));
    }

    public function update(Request $request, Categories $categories)
    {
    DB::table('categories')
      ->where('id', $id)
      ->update(
      [
        'name' => $request->name,
        
      ]);
      return redirect()->route('categories.index');
    }
  
    public function destroy($id)
    {
    Categories::destroy($id);
    return redirect()->route('categories.index');
    }
}
