<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    // Add 'name', 'desc', 'image', 'video' to the fillable array
    protected $fillable = [
        'name', // Allow mass assignment for the 'name' field
        'desc',
        'image',
        'video',
    ];
}
