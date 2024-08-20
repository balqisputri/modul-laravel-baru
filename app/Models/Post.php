<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Tentukan kolom yang boleh diisi
    protected $fillable = ['title', 'content', 'author_id'];

    // Relasi dengan model Author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
