<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetrieveController extends Controller
{
    public function showForm()
    {
        return view('retrieve.input');
    }

    public function retrieveInput(Request $request)
    {
        // Mengambil semua data input
        $inputData = $request->all();

        return view('retrieve-input', compact('inputData'));
    }
}
