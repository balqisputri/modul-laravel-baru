<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validasi dan logika penyimpanan data form
        // Contoh validasi:
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Flash pesan sukses ke session
        $request->session()->flash('status', 'Form has been submitted successfully!');
        
        // Redirect kembali ke halaman sebelumnya
        return redirect()->back();
    }
}
