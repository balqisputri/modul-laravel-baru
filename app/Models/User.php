<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    // Jika ada atribut yang tidak boleh diisi secara massal, tambahkan seperti ini
    protected $fillable = ['name', 'email', 'password'];

    // Jika menggunakan Laravel 8 atau lebih baru, Anda mungkin perlu menambahkan ini untuk mendukung pengisian massal
    protected $guarded = [];
}
