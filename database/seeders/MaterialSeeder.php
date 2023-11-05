<?php

namespace Database\Seeders;

use App\Models\LotMaterial;
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
        $lot = LotMaterial::find(1);
        $material->lot_material_id = $lot->id;
        $material->save();

        $material = new Material();
        $material->name = "Axe";
        $material->qty = 7;
        $material->unit = "อัน";
        $lot = LotMaterial::find(1);
        $material->lot_material_id = $lot->id;
        $material->save();

        $material = new Material();
        $material->name = "ปุ๋ย";
        $material->qty = 30;
        $material->unit = "กระสอบ";
        $lot = LotMaterial::find(2);
        $material->lot_material_id = $lot->id;;
        $material->save();

        $material = new Material();
        $material->name = "ปุ๋ย";
        $material->qty = 20;
        $material->unit = "กระสอบ";
        $lot = LotMaterial::find(1);
        $material->lot_material_id = $lot->id;;
        $material->save();
    }
}
