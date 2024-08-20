<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // Tentukan kolom yang boleh diisi
    protected $fillable = ['name', 'email'];

    // Relasi dengan model Post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
