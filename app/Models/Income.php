<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Income extends Model
{
    use HasFactory, Sortable;
    protected $fillable = ['name', 'date', 'amount'];
}
