<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function showForm()
    {
        return view('formulir.input');
    }

    public function handleForm(Request $request)
    {
        // Memeriksa apakah input 'name' ada dan tidak kosong
        if ($request->has('name')) {
            $name = $request->input('name');
            return "Input 'name' ada dan nilainya: " . $name;
        } else {
            return "Input 'name' tidak ada.";
        }
    }
}
