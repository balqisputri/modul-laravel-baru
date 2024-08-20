<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsrfController extends Controller
{
    public function showForm()
    {
        return view('csrf.form');
    }

    public function submitForm(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);



        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
