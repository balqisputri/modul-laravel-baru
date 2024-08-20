<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    // Metode untuk menampilkan daftar toko
    public function index()
    {
        // Mendapatkan semua data toko dari database
        $stores = Store::all();
        
        // Mengirim data toko ke view 'stores.index'
        return view('stores.index', compact('stores'));
    }

    // Metode untuk menampilkan form edit
    public function edit($id)
    {
        $store = Store::findOrFail($id);
        return view('stores.edit', compact('store'));
    }

    // Metode untuk menangani pembaruan data
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:5'
        ]);

        $store = Store::findOrFail($id);
        $store->update([
            'name' => $request->name,
            'location' => $request->location,
            'rating' => $request->rating,
        ]);

        return redirect()->route('stores.index')->with('success', 'Store updated successfully.');
    }
}
