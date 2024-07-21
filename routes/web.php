<?php

use App\Models\General;
use App\Models\Message;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'setting' => General::where('id', 1)->first(),
        'projects' => Project::where('status', 'Complete')->get(),
    ];
    return view('home', $data);
});
Route::post('/form-message', function (Request $request) {
    Message::create($request->all());
    return response()->json(['success' => 'message berhasil terkirim']);
})->name('form-message');
