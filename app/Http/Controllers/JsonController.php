<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function getJsonResponse()
    {
        // Contoh data untuk dikembalikan sebagai JSON response
        $data = [
            'name' => 'Alatus',
            'email' => 'xiaws@gmail.com',
            'phone' => '123-456-7890',
            'address' => '123 Main St, Teyvat'
        ];

        return response()->json($data);
    }

    public function postJsonResponse(Request $request)
    {
        // Mengambil semua data input
        $inputData = $request->all();

        // Contoh respons JSON dengan data yang dikirim oleh pengguna
        $response = [
            'status' => 'success',
            'message' => 'Data received successfully',
            'data' => $inputData
        ];

        return response()->json($response);
    }
}
