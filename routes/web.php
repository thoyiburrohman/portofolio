<?php

use App\Models\General;
use App\Models\Message;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Api;

Route::get('/', function () {
    $data = [
        'projects' => Project::where('status', 1)->latest()->get(),
    ];
    return view('index', $data);
});
Route::post('/form-message', function (Request $request, Api $tele) {
    Message::create($request->all());
    $dataMessage = Message::where('message', $request->message)->first();
    $message = 'Assalamualaikum bro, ada pesan dari' .
        PHP_EOL . PHP_EOL . 'Nama : *' . $dataMessage->name . '*' .
        PHP_EOL . 'Emailnya : _' . $dataMessage->email . '_' .
        PHP_EOL . 'Pesannya : *' . $dataMessage->message . '*' .
        PHP_EOL . 'Web : *Portofolio*' .
        PHP_EOL . PHP_EOL . 'Terimakasih bro.';
    $parse = 'Markdown';
    $tele->sendMessage([
        'chat_id' => '181194724',
        'parse_mode' =>  $parse,
        'text' =>  $message,
    ]);
    return response()->json(['success' => 'message berhasil terkirim']);
})->name('form-message');

Route::get('/download-cv', function () {
    $filePath = public_path('cv.pdf'); // Path to your CV file

    if (!file_exists($filePath)) {
        // Handle case where file does not exist
        return redirect()->back()->with('error', 'CV file not found.');
    }

    $fileName = 'Thoyiburrohman-CV.pdf'; // The name the user will see when downloading

    return response()->download($filePath, $fileName, [
        'Content-Type' => 'application/pdf',
    ]);
})->name('download.cv');
