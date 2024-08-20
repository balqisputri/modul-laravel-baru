<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $articles = Artikel::paginate(5); // Mengambil 10 data per halaman
        return view('artikel.index', compact('articles'));
    }

}
