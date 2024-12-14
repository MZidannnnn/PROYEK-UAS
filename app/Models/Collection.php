<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Collection extends Model
{
    //
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'collections';

    // Tentukan kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'name',
        'description',
        'image',
        'category_id',
    ];

    // Relasi ke model Category (one-to-many inverse)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
