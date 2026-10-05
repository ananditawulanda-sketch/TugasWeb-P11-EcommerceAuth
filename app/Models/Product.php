<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'stock',
        'image',
    ];
    public function scopeAvailable(Builder $query): Builder
    {
        return $query->where('stock', '>', 0);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}