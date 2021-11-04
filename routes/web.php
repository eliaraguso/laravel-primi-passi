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
        "pagine" => [
        "page1" => "pagina1",
        "page2" => "pagina2",
        "page3" => "pagina3",
        "page4" => "pagina4",
        ],
    ];
    return view('home', $data);
});

Route::get('/pagina1', function () {
    $data = [
        "pagine" => [
            "home" => "home",
            "page2" => "pagina2",
            "page3" => "pagina3",
            "page4" => "pagina4",
        ],
    ];
    return view('pagina1', $data);
});

Route::get('/pagina2', function () {
    $data = [
        "pagine" => [
            "home" => "home",
            "page1" => "pagina1",
            "page3" => "pagina3",
            "page4" => "pagina4",
        ],
    ];
    return view('pagina2', $data);
});

Route::get('/pagina3', function () {
    $data = [
        "pagine" => [
            "home" => "home",
            "page1" => "pagina1",
            "page2" => "pagina2",
            "page4" => "pagina4",
        ],
    ];
    return view('pagina3', $data);
});

Route::get('/pagina4', function () {
    $data = [
        "pagine" => [
            "home" => "home",
            "page1" => "pagina1",
            "page2" => "pagina2",
            "page3" => "pagina3",
        ],
    ];
    return view('pagina4', $data);
});
