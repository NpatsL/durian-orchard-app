<?php

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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->constrained();
            $table->string('name');
            $table->string('detail');
            $table->date('deadline');
            $table->integer('use_qty')->default(0);
            $table->string('status')->default('INCOMPLETE') ;  // notCompleted, completed
            $table->foreignIdFor(\App\Models\Material::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
