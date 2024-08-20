<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Mengambil daftar nilai dari kolom 'name'
        $names = Contact::pluck('name');
        return view('contacts.index', compact('names'));
    }
}
