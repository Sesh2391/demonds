<?php

use Illuminate\Support\Facades\Route;
use ArielMejiaDev\LarapexCharts\LarapexChart;

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
    return redirect()->route('login');
    //return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	$chart = (new LarapexChart)->areaChart()
    ->addData('Physical sales', [40, 93, 35, 42, 18, 82])
    ->addData('Digital sales', [70, 29, 77, 28, 55, 45])
    ->setHeight(250)
    ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);


	 $chart2 =  (new LarapexChart)->lineChart()
    ->addData('Door state', [40, 93, 35, 42, 18, 82])
    ->addData('Temperature', [70, 29, 77, 28, 55, 45])
    ->setColors(['#0068FF','#FFF300'])
    ->setHeight(250)
    ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']); 

    $chart_Voltage = (new LarapexChart)->radialChart()
    ->addData([123,])
    ->setLabels(['Voltage'])
    ->setHeight(277)
    ->setColors(['#FF7C00']);

    $chart_current = (new LarapexChart)->radialChart()
    ->addData([10,])
    ->setLabels(['Current',])
    ->setHeight(277)
    ->setColors(['#F11A1A']);

    $chart_dust = (new LarapexChart)->donutChart()
    ->setTitle('Dust in room')
    ->addData([70])
    ->setWidth(250)
    ->setLabels(['Dust']);


    return view('dashboard',compact('chart','chart2','chart_Voltage','chart_current','chart_dust'));
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/settings', function () {
	return view('settings');
})->name('settings');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
