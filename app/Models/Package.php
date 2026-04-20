<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'type',
        'image',
        'features',
        'is_featured',
    ];

    protected $casts = [
        'features' => 'array',   
        'is_featured' => 'boolean'
    ];

    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }
}