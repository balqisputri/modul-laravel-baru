<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    // Method untuk menampilkan daftar berita
    public function index()
    {
        $berita = Berita::paginate(5); // Menampilkan 5 berita per halaman
        return view('berita.index', compact('berita'));
    }

    // Method untuk menampilkan detail berita
    public function show($id)
    {
        $berita = Berita::findOrFail($id); // Mengambil data berita berdasarkan ID
        return view('berita.show', compact('berita'));
    }

    // Method untuk menampilkan form tambah berita (opsional)
    public function create()
    {
        return view('berita.create');
    }

    // Method untuk menyimpan berita baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'penulis' => 'nullable|string|max:255',
        ]);

        Berita::create($validatedData); // Menyimpan data ke database

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }
}
