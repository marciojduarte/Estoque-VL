<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\MovimentoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PrincipalController::class, 'index']);
Route::get('lista', [ProdutoController::class, 'listaProdutos']);

Route::get('produto/detalhe/{id}', [ProdutoController::class, 'show']);
Route::post('/getproduto/{nome?}', [ProdutoController::class, 'ajaxProduto'])->name('getproduto');
Route::get('produto/cadastro', [ProdutoController::class, 'create']);
Route::post('produto/save', [ProdutoController::class, 'store']);

Route::get('fornecedores', [FornecedorController::class, 'index']);
Route::get('fornecedor/cadastro', [FornecedorController::class, 'create']);
Route::get('fornecedor/detalhe/{id}', [FornecedorController::class, 'show']);
Route::post('fornecedor/save', [FornecedorController::class, 'store']);

Route::get('estoque', [EstoqueController::class, 'index']);
Route::get('emfalta', [EstoqueController::class, 'inFault']);
Route::get('movimentos', [MovimentoController::class, 'index']);
Route::get('/estoque/entrada', [EntradaController::class, 'index']);
Route::post('/entrada/save', [EntradaController::class, 'store']);