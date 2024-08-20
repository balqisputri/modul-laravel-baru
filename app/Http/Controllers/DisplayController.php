<?php

namespace App\Http\Controllers;

class DisplayController extends Controller
{
    public function tampilkanData()
    {
        // Data statis untuk ditampilkan
        $data = [
            ['name' => 'Nanon Korapat', 'email' => 'nanons@gmail.com', 'message' => 'Swadhikhap, My name is Nanon Korapat.'],
            ['name' => 'Fourth Nattawat', 'email' => 'fouts@gmail.com', 'message' => 'Swadhikhap, My name is Fourth Nattawat.'],
            ['name' => 'Ohm Pawat', 'email' => 'ohmna@gmail.com', 'message' => 'Swadhikhap, My name is Ohm Pawat.']
        ];

        return view('display-data', compact('data'));
    }
}
