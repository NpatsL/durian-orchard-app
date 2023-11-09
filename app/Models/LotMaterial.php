<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LotMaterial extends Model
{
    use HasFactory;
    // protected $primaryKey = 'lot_id';
    // public $incrementing = false;

    public function materials(): HasMany
    {
        return $this->hasMany(Material::class);
    }
}
