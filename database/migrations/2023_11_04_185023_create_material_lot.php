<?php

use App\Models\LotMaterial;
use App\Models\Material;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('material_lot', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Material::class);
            $table->foreignIdFor(LotMaterial::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_lot');
    }
};
