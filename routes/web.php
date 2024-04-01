<?php

use App\Http\Controllers\ItemController;
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

Route::get('pdfview', array('as' => 'pdfview', 'uses' => 'ItemController@pdfview'));

Route::get('generate-pdf', [ItemController::class, 'generatePDF']);
Route::get('/invoice-view', [ItemController::class, 'view']);

Route::get('/', function () {
    return view('welcome');
});
