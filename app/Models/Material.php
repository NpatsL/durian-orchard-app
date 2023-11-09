<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kyslik\ColumnSortable\Sortable;

class Material extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ['name', 'unit', 'qty'];

    public function lotMaterials(): HasMany
    {
        return $this->hasMany(LotMaterial::class);
    }
}
