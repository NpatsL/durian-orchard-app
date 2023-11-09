<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kyslik\ColumnSortable\Sortable;

class LotMaterial extends Model
{
    use HasFactory, Sortable;

    public function materials(): HasMany
    {
        return $this->hasMany(Material::class);
    }
}
