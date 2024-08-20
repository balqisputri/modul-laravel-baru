<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionManager extends Controller
{
    // Metode untuk menyimpan data ke session
    public function storeData(Request $request)
    {
        $request->session()->put('data', $request->input('value'));
        return redirect()->route('show.data')->with('message', 'Data has been stored in session!');
    }

    // Metode untuk menampilkan data dari session
    public function showData(Request $request)
    {
        $data = $request->session()->get('data', 'No data found in session.');
        return view('session', compact('data'));
    }

    // Metode untuk menghapus data dari session
    public function deleteData(Request $request)
    {
        $request->session()->forget('data');
        return redirect()->route('show.data')->with('message', 'Data has been removed from session!');
    }
}
