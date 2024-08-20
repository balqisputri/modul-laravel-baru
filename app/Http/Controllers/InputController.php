<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function showForm()
    {
        return view('input-form');
    }

    public function processForm(Request $request)
    {
        // Memeriksa apakah input 'name' hadir
        if ($request->has('name')) {
            $name = $request->input('name');
            return "Name: $name";
        } else {
            return "Name input is missing.";
        }
    }
}
