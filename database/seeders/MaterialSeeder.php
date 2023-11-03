<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $material = new Material();
        $material->name = "Hoe";
        $material->qty = 10;
        $material->unit = "อัน";
        $material->save();
    }
}
