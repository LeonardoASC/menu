<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('produto', 'App\Http\Controllers\ProdutoController');
Route::resource('cliente', 'App\Http\Controllers\ClienteController');


Route::group(['middleware' => 'verificar.credenciais'], function () {
    Route::resource('pedido', 'App\Http\Controllers\PedidoController');
    Route::resource('cardapio', 'App\Http\Controllers\CardapioController');
});
Route::resource('comanda', 'App\Http\Controllers\ComandaController');


Route::get('/categoria', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categoria/create', [App\Http\Controllers\CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categoria', [App\Http\Controllers\CategoriaController::class, 'store'])->name('categoria.store');
Route::get('/categoria/{categoria}', [App\Http\Controllers\CategoriaController::class, 'show'])->name('categoria.show');
Route::get('/categoria/{categoria}/edit', [App\Http\Controllers\CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put('/categoria/{categoria}', [App\Http\Controllers\CategoriaController::class, 'update'])->name('categoria.update');
Route::delete('/categoria/{categoria}', [App\Http\Controllers\CategoriaController::class, 'destroy'])->name('categoria.destroy');




Route::post('/realizar-tarefa', [App\Http\Controllers\CardapioController::class, 'realizarTarefa'])->name('realizar-tarefa');



Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('home').'">clique aqui</a> para ir para página inicial';
});
