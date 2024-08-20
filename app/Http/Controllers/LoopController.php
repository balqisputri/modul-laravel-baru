<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
    public function showLoops()
    {
        // Data statis untuk di-loop
        $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        
        return view('loops', compact('daysOfWeek'));
    }
}
