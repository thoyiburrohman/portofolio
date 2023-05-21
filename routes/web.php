<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TodoController;
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
        'projects' => Project::where('status', 'Done')->get(),
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

// To Do List
Route::resource('/todo-list', TodoController::class)->except('destroy');
Route::post('/todo-list/{todo-list}', [TodoController::class, 'updateStatus'])->name('todo-list.status');
Route::get('/todo-list/{todo-list}/data', [TodoController::class, 'data'])->name('todo-list.data');
