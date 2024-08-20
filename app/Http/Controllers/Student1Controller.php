<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    // Menampilkan formulir pendaftaran
    public function showRegistrationForm()
    {
        return view('student.register');
    }

    // Memproses pendaftaran siswi
    public function register(Request $request)
    {
        // Mendekode JSON input
        $data = json_decode($request->getContent(), true);

        // Aturan validasi
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:120',
            'class' => 'required|string|max:255',
        ]);

        // Memeriksa apakah validasi gagal
        if ($validator->fails()) {
            return response()->json(['message' => 'Input tidak valid', 'errors' => $validator->errors()], 400);
        }

        // Jika validasi berhasil
        return response()->json(['message' => 'Input ada dan valid'], 200);
    }
}
