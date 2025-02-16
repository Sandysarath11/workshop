<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = [
        'user_id',
        'age',
        'class',
        'section',
        'contact',
    ];

    // Optional: Define relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
