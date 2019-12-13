<?php
use App\Http\Controllers\ProductsController;
//use Symfony\Component\Routing\Annotation\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Routes Home
Route::get('/home', 'HomeController@index')->name('home');

//Routes Products
Route::resource('products','ProductsController');
Route::get('products/edit/{id}', 'ProductsController@edit'); // editar registro
Route::get('products/view/{id}', 'ProductsController@view'); // ver registro
Route::post('products/delete', 'ProductsController@delete'); // excluir registro


//Routes Categories
Route::resource('categories','CategoriesController');
Route::get('categories/edit/{id}', 'CategoriesController@edit'); // editar registro
Route::get('categories/view/{id}', 'CategoriesController@view'); // ver registro
Route::post('categories/delete', 'CategoriesController@delete'); // excluir registro

//Routes Brands
Route::resource('brands','BrandsController');
Route::get('brands/edit/{id}', 'BrandsController@edit'); // editar registro
Route::get('brands/view/{id}', 'BrandsController@view'); // ver registro
Route::post('brands/delete', 'BrandsController@delete'); // excluir registro

//Routes Providers
Route::resource('providers','ProvidersController');
Route::get('providers/edit/{id}', 'ProvidersController@edit'); // editar registro
Route::get('providers/view/{id}', 'ProvidersController@view'); // ver registro
Route::post('providers/delete', 'ProvidersController@delete'); // excluir registro
