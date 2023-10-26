<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LotMaterial extends Model
{
    use HasFactory;

    public function material(): BelongsTo
    {
        return $this->belongsTo(Material::class);
    }
}
