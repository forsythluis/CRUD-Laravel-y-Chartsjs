<?php

use App\Http\Controllers\Base_monetariaController;
use App\Http\Controllers\IndicegeneralpreciosconsumidoramcController;
use App\Http\Controllers\IndicegeneralpreciosconsumidorController;
use App\Http\Controllers\PibconstantesycorrientesController;
use App\Http\Controllers\ReservasinterController;
use App\Http\Controllers\TipocambiohistoricoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GraficoDivisasController;
use App\Http\Controllers\GraficoInflacionController;
use App\Http\Controllers\GraficoTipoCambioController;
use App\Http\Controllers\GraficoIpcamController;
use App\Http\Controllers\GraficoPibController;
use App\Http\Controllers\GraficoPreciosConsumidorController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index', function () {

    return view('index');
})->name('index');
Route::get('/divisas', [TipocambiohistoricoController::class, 'index'])->name('divisas');
Route::get('/reservas',[ReservasinterController::class, 'index'])->name('reservas');
Route::get('/pib', [PibconstantesycorrientesController::class, 'index'])->name('pib');
Route::get('/inpc', [IndicegeneralpreciosconsumidorController::class, 'index'])->name('inpc');
Route::get('/inpcamc', [IndicegeneralpreciosconsumidoramcController::class, 'index'])->name('inpcamc');
Route::get('/inflacion',[Base_monetariaController::class, 'index'])->name('inflacion');
Route::get('/graficodivisas', [GraficoDivisasController::class, 'index'])->name('graficodivisas');
Route::get('/graficoinflacion', [GraficoInflacionController::class, 'index'])->name('graficoinflacion');
Route::get('/graficotipocambio', [GraficoTipoCambioController::class, 'index'])->name('graficotipocambio');
Route::get('/graficoigpamc', [GraficoIpcamController::class, 'index'])->name('graficoipcamc');
Route::get('/graficopib', [GraficoPibController::class, 'index'])->name('graficopib');
Route::get('/graficoinpc', [GraficoPreciosConsumidorController::class, 'index'])->name('graficoinpc');