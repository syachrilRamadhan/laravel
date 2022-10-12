<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Produk extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'produk_id', 'id');
    }

    public function type(): BelongsToMany
    {
        return $this->belongsToMany(Type::class, 'produk_type', 'produk_id', 'types_id');
    }
}