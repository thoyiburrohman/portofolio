<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data = [
            'setting' => General::where('id', 1)->first(),
        ];
        dd($data);
        return view('home', $data);
    }
}
