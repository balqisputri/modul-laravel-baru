<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gadget;

class GadgetController extends Controller
{
    // Menampilkan form untuk menambah gadget
    public function create()
    {
        return view('gadgets.create');
    }

    // Menyimpan gadget baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        Gadget::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
        ]);

        return redirect()->route('gadgets.create')->with('success', 'Gadget berhasil ditambahkan!');
    }
}
