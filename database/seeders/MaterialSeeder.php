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
        $material->name = "ยาฆ่าแมลง";
        $material->qty = 3000;
        $material->unit = "มิลลิลิตร";
        $lot = LotMaterial::find(1);
        $material->lot_material_id = $lot->id;
        $material->save();

        $material = new Material();
        $material->name = "ยาพ่น";
        $material->qty = 2000;
        $material->unit = "มิลลิลิตร";
        $lot = LotMaterial::find(1);
        $material->lot_material_id = $lot->id;
        $material->save();

        $material = new Material();
        $material->name = "ปุ๋ย";
        $material->qty = 50;
        $material->unit = "กิโลกรัม";
        $lot = LotMaterial::find(2);
        $material->lot_material_id = $lot->id;;
        $material->save();

        $material = new Material();
        $material->name = "ปุ๋ย";
        $material->qty = 100;
        $material->unit = "กิโลกรัม";
        $lot = LotMaterial::find(1);
        $material->lot_material_id = $lot->id;;
        $material->save();

        $material = new Material();
        $material->name = "จอบ";
        $material->qty = 10;
        $material->unit = "เล่ม";
        $lot = LotMaterial::find(3);
        $material->lot_material_id = $lot->id;
        $material->save();

        $material = new Material();
        $material->name = "เสียม";
        $material->qty = 10;
        $material->unit = "เล่ม";
        $lot = LotMaterial::find(3);
        $material->lot_material_id = $lot->id;
        $material->save();
    }
}
