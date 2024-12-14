<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    //
    use HasFactory;

        // Tentukan nama tabel jika tidak sesuai dengan konvensi Laravel
        // protected $table = 'categories';

        // Tentukan kolom yang bisa diisi mass-assignment
        protected $fillable = [
            'name',
            'description',
        ];
    
        // Jika ingin menambahkan relasi ke model lain, misalnya relasi ke 'Collection':
        public function collections()
        {
            return $this->hasMany(Collection::class);
        }
    
}
