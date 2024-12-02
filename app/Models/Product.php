<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'flavor', 
        'price', 
        'status', 
        'is_disabled'
        'photo_path'
    ];

    protected $casts = [
        'is_disabled' => 'boolean',
    ];
}