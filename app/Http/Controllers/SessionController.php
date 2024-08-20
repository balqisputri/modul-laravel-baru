<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // Method untuk menyimpan data ke session
    public function storeData(Request $request)
    {
        // Simpan data ke session
        $request->session()->put('data', $request->input('value'));
        return redirect()->route('show.data')->with('message', 'Data has been stored in session!');
    }

    // Method untuk menampilkan data dari session
    public function showData(Request $request)
    {
        // Ambil data dari session
        $data = $request->session()->get('data', 'No data found in session.');
        return view('session', compact('data'));
    }

    // Method untuk menghapus data dari session
    public function deleteData(Request $request)
    {
        // Hapus data dari session
        $request->session()->forget('data');
        return redirect()->route('show.data')->with('message', 'Data has been removed from session!');
    }
}
