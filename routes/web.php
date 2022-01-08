<?php
use App\Http\Controllers\Firebase\ContactController;

Route::get('contacts', [ContactController::class, 'index']);
Route::get('yenikayıt', [ContactController::class, 'create']);
Route::get('anaekran', [ContactController::class, 'logın']);
Route::post('yenikayıt', [ContactController::class, 'store']);
Route::get('deneme', [ContactController::class, 'goster']);
Route::post('deneme', [ContactController::class, 'denemeiki']);
Route::get('sifremiunuttum', [ContactController::class, 'sifre']);
Route::post('guncelleme', [ContactController::class, 'guncel']);
Route::get('password/{id}', [ContactController::class, 'storeiki']);
Route::put('sifredegistir/{id}', [ContactController::class, 'veridegistir']);
Route::get('yob', [ContactController::class, 'yazokulu']);
Route::get('basvurularım', [ContactController::class, 'basvuru']);
Route::get('ygb', [ContactController::class, 'yataygecis']);
Route::get('cap', [ContactController::class, 'capform']);
Route::get('dkb', [ContactController::class, 'dikeygecis']);
Route::get('dıb', [ContactController::class, 'dersıntıbakı']);
Route::get('admin', [ContactController::class, 'adminpanel']);
Route::post('admingiris', [ContactController::class, 'denemeüc']);
Route::get('fotograf', [ContactController::class, 'foto']);


Route::get('/', function () {
    return view('welcome');
});
