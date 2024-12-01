<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'status',
        'delivery_date',
        'delivery_time',
        'completed_at',
        'payment_status',
        'total_amount'
    ];

    protected $casts = [
        'delivery_date' => 'date',
        'delivery_time' => 'datetime',
        'completed_at' => 'datetime',
        'total_amount' => 'decimal:2'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_products')
            ->withPivot('quantity', 'price')
            ->withTimestamps();
    }

    public function addons()
    {
        return $this->belongsToMany(Addon::class, 'order_addons')
            ->withPivot('quantity', 'price')
            ->withTimestamps();
    }
}