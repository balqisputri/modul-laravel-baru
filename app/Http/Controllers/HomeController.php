<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function redirectExample()
    {
        // Redirect ke route 'profile.show' dengan parameter id, name, dan address
        return redirect()->route('profile.show', ['id' => 1, 'name' => ' Xiao ', 'address' => '123 Main St, Teyvat']);
    }
}