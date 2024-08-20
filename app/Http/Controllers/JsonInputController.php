<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonInputController extends Controller
{
    public function showForm()
    {
        return view('json-form');
    }

    public function handleForm(Request $request)
    {
        $data = $request->json()->all();

        // Lakukan sesuatu dengan data JSON
        return response()->json(['message' => 'Data diterima', 'data' => $data]);
    }
}

