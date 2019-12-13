<?php
/* CREATE RODRIGO COSTA 11/12/2019 */
namespace App\Http\Controllers;
use App\Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller{
    public function index()
    {
        $brands = Brands::All();
        return view('brands.index', compact('brands'));
    }
    public function create()
    {
        return view('brands.create',compact('brands'));
    }

    public function store(Request $request)
    {
        Brands::create($request->all());
        return redirect()->route('brands.index');
    }
    
     public function show($id)
    {
      $categories =  Brands::find($id);
      return view ('brands.show', compact('brands'));
    }

    public function edit($id)
    {
      $categories =  Brands::find($id);
      return view ('brands.edit', compact('brands'));
    }

    public function update(Request $request,  Brands $brands)
    {
    DB::table('brands')
      ->where('id', $id)
      ->update(
      [
        'name' => $request->name,
      ]);
      return redirect()->route('brands.index');
    }
  
    public function destroy($id)
    {
    Brands::destroy($id);
    return redirect()->route('brands.index');
    }
}
