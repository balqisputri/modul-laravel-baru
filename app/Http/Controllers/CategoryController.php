<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Mengambil semua baris dari tabel categories
        return view('categories.index', compact('categories'));
    }
}
