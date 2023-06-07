<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Telegram\Bot\Api;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'messages' => Message::all(),
        ];

        return view('backend.pages.messages.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Api $tele)
    {
        // $store = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email:dns',
        //     'phone' => 'required',
        //     'message' => 'required',
        // ]);
        Message::create($request->all());
        $dataMessage = Message::where('message', $request->message)->first();
        $message = 'Assalamualaikum bro,ada pesan dari Nama : ' . $dataMessage->name .
            ' Emailnya : ' . $dataMessage->email .
            ' Pesannya : ' . $dataMessage->message .
            ' Hubungi Kembali di : ' . $dataMessage->callback .
            ' Web : Portofolio Terimakasih bro';
        $tele->sendMessage([
            'chat_id' => '181194724',
            'text' =>  $message,

        ]);

        return redirect('/#contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }

    public function data(Message $message)
    {
        $message = Message::findOrFail($message->id);
        $data = [
            'messages' => $message,
        ];
        return response()->json($data);
    }
}
