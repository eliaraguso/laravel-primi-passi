<?php

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

Route::get('/', function () {
    $data = [
        "link1" => "Pagina 1",
        "link2" => "Pagina 2",
        "link3" => "Pagina 3",
        "link4" => "Pagina 4"
    ];
    return view('home', $data);
});
