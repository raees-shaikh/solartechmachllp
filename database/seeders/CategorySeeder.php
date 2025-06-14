<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Solar Panel-Pv  Topcon-N-Hjt-210 X210 High Speed Production  Up To 9000 Cells/Hour',
            'Solar EPE [ EVA + POE ] Encapsulation Films',
            'Solar Waste Panel Recyling',
            'Solar Inverter Automatic Assembly Line',
            'Copper Ribbon & Busbar',
            'PVDF Coating/Lamination Plant For PV Backsheet',
            'Heavy Duty Cardboard Container Box 6 X 3 Feet For Solar PV Packaging',
            'PET Strap Extrusion Production Plants For Packaging The Containers',
            'Solar Cable Extrusion Line For Photovoltaic Wire Insulation',
            'Solar Panel Heavy Duty  Ground, Roof Top Mounting, Complete  Roll Forming Production Plant',
            'Solar Cell From Ingot-Wafer'
        ];
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'title' => $category,
                'slug' => Str::slug($category),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
