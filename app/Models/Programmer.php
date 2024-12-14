<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Programmer extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'role',
        'nim',
        'image',
    ];


}
