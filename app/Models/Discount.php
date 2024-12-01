<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'type',      // e.g., 'senior_citizen', 'pwd', 'wholesale'
        'percentage',
        'is_enabled'
    ];

    protected $casts = [
        'percentage' => 'float',
        'is_enabled' => 'boolean'
    ];

    // Optional: Scope to get only enabled discounts
    public function scopeEnabled($query)
    {
        return $query->where('is_enabled', true);
    }
}