<?php

namespace Database\Seeders;

use App\Models\LotMaterial;
use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LotMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lot = new LotMaterial();
        $lot->name = "today";
        $lot->date = "2020-11-5";
        $lot->save();

        $lot = new LotMaterial();
        $lot->name = "tommorow";
        $lot->date = "2023-1-2";
        $lot->save();

        $lot = new LotMaterial();
        $lot->name = "next month";
        $lot->date = "2023-10-5";
        $lot->save();
    }
}
