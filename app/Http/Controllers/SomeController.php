<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomeController extends Controller
{
    public function someControllerMethod()
    {
        $data = [
            'appName' => 'My Laravel App',
            // data lainnya
        ];

        return view('someview', $data);
    }

}
