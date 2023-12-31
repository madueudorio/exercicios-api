<?php

use App\Http\Controllers\ExercicioUmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('exercicio/um', 
[ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois',
[ExercicioDoisController::class, 'retornarMaior']);

Route::post('exercicio/tres',
[ExercicioTresController::class, 'exibirMedia']);

Route::post('exercicio/quatro',
[ExercicioQuatroController::class, 'verificarNumero']);

Route::post('exercicio/cinco',
[ExercicioCincoController::class, 'verificarDivisivel']);

Route::post('exercicio/seis',
[ExercicioSeisController::class, 'verificarIdade']);

Route::get('exercicio/sete',
[ExercicioSeteController::class, 'exibirNumeros']);


Route::post('exercicio/oito',
[ExercicioOitoController::class, 'exibirTabuada']);