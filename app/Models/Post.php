<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'gambar'];

        public function getGambarUrlAttribute()
    {
        return $this->gambar ? asset('images/' . $this->gambar) : null;
    }
}
