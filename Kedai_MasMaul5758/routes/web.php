<?php

use Illuminate\Support\Facades\Route;
use ConsoleTVs\Charts\Facades\Charts;
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
// Route::get('/chart', function () {
//     $chart = Charts::create('bar', 'highcharts')
//         ->title('Contoh Grafik Bar')
//         ->elementLabel('Jumlah')
//         ->labels(['Jan', 'Feb', 'Mar'])
//         ->values([10, 25, 15]);

//     return view('chart', ['chart' => $chart]);
// });


Route::get('/', function () {
    return view('User.dashbord');
});

Route::get('/dashbord', function () {
    return view('dashbord');
});

Route::get('/login', function () {
    return view('User.login');
});
