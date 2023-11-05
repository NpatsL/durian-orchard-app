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
        $lot->name = "";
        $lot->date = "2020-11-5";
        $lot->save();

        $lot = new LotMaterial();
        $lot->name = "";
        $lot->date = "2021-1-2";
        $lot->save();

        $lot = new LotMaterial();
        $lot->name = "";
        $lot->date = "2022-10-5";
        $lot->save();

        $lot = new LotMaterial();
        $lot->name = "";
        $lot->date = "2022-3-26";
        $lot->save();

        $lot = new LotMaterial();
        $lot->name = "";
        $lot->date = "2022-7-14";
        $lot->save();

        $lot = new LotMaterial();
        $lot->name = "";
        $lot->date = "2023-11-4";
        $lot->save();
    }
}
