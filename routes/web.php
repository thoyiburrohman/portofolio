<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

use App\Models\Project;

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

Route::get('/', function () {
    $data = [
        'projects' => Project::all(),
    ];
    return view('frontend.pages.index', $data);
})->name('index');
Route::get('/shop', function () {
    return view('frontend.store.index');
})->name('shop');


// Projects
Route::resource('/project', ProjectController::class)->except('destroy');
Route::get('/project/{project}/delete', [ProjectController::class, 'destroy'])->name('project.delete');
Route::post('/project/{project}', [ProjectController::class, 'updateStatus'])->name('project.status');
Route::get('/project/{project}/data', [ProjectController::class, 'data'])->name('project.data');

// Message
Route::resource('/message', MessageController::class)->except('destroy');
