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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ADM
// Route::resource('produto', 'App\Http\Controllers\ProdutoController');
// Route::resource('cliente', 'App\Http\Controllers\ClienteController');
// Route::resource('mesa', 'App\Http\Controllers\MesaController');
// Route::resource('pedidoadm', 'App\Http\Controllers\PedidoADMController');


Route::middleware(['auth'])->group(function () {
    Route::resource('produto', 'App\Http\Controllers\ProdutoController');
    Route::resource('mesa', 'App\Http\Controllers\MesaController');
    Route::resource('pedidoadm', 'App\Http\Controllers\PedidoADMController');
    Route::resource('administrativa', 'App\Http\Controllers\AdministrativaController');
    Route::resource('usuario', 'App\Http\Controllers\UsuarioController');
    Route::resource('role', 'App\Http\Controllers\RoleController');
    Route::resource('permission', 'App\Http\Controllers\PermissionController');
    Route::resource('honorario', 'App\Http\Controllers\HonorarioController');
});



//Não deu para utilizar resource por causa do nome gerado pelo laravel fica errado, "categorium"
Route::get('/categoria', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categoria/create', [App\Http\Controllers\CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categoria', [App\Http\Controllers\CategoriaController::class, 'store'])->name('categoria.store');
Route::get('/categoria/{categoria}', [App\Http\Controllers\CategoriaController::class, 'show'])->name('categoria.show');
Route::get('/categoria/{categoria}/edit', [App\Http\Controllers\CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put('/categoria/{categoria}', [App\Http\Controllers\CategoriaController::class, 'update'])->name('categoria.update');
Route::delete('/categoria/{categoria}', [App\Http\Controllers\CategoriaController::class, 'destroy'])->name('categoria.destroy');



// USUARIO
Route::group(['middleware' => 'verificar.credenciais'], function () {
    Route::resource('pedido', 'App\Http\Controllers\PedidoController');
    Route::resource('cardapio', 'App\Http\Controllers\CardapioController');
    Route::resource('comanda', 'App\Http\Controllers\ComandaController');
});
Route::resource('cliente', 'App\Http\Controllers\ClienteController');

// Route::post('/realizar-tarefa', [App\Http\Controllers\CardapioController::class, 'realizarTarefa'])->name('realizar-tarefa');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('home').'">clique aqui</a> para ir para página inicial';
});
