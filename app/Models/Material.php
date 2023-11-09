<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kyslik\ColumnSortable\Sortable;

class Material extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ['name', 'unit', 'qty'];

    public function lotMaterial(): BelongsTo
    {
        return $this->belongsTo(LotMaterial::class);
    }

    public function expenses(): HasMany
    {
        return $this->hasMany(Expense::class);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
