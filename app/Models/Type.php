<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Type extends Model
{
    use HasFactory;

    public function produk(): BelongsToMany
    {
        return $this->belongsToMany(Produk::class, 'produk_type', 'types_id', 'produk_id');
    }
}