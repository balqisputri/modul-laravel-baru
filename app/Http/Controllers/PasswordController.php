<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function hash(){
        $hash_password_saya = Hash::make('balqis');
        echo $hash_password_saya;
    }
}
