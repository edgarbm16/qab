<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Servicios;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminServicioComponent;
use App\Http\Livewire\Admin\AdminAddServicioComponent;
use App\Http\Livewire\Admin\AdminEditServicioComponent;
use App\Http\Livewire\HomeComponent;

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

// Route::get('/', function () {
//     return view('/layouts/base');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
//         return view('dashboard');
// })->name('dashboard');


Route::get('/',HomeComponent::class);

//Para el usuario
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');

});

//Para el admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function () {
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/servicios', AdminServicioComponent::class)->name('admin.servicios');
    Route::get('/admin/servicio/add', AdminAddServicioComponent::class)->name('admin.addservicio');
    Route::get('/admin/servicio/edit/{servicio_slug}', AdminEditServicioComponent::class)->name('admin.editservicio');
});



