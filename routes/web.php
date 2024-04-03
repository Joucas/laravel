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


Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobrenos'])->name('site.sobrenos');

Route::get('/login', [App\Http\Controller\LoginController::class, 'login'])->name('site.login');

Route::prefix('app')->group(function(){

    Route::get('/clientes', [App\Htttp\Controller\ClientesController::class, 'clientes'])->name('app.clientes');

    Route::get('/fornecedores', [App\Http\Controller\FornecedoresController::class, 'fornecedores'])->name('app.fornecedores');
    
    Route::get('/produtos', [App\Http\Controller\ProdutosController::class, 'produtos'])->name('app.produtos');
    
});