<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = ['Aalborg', 'Aarhus','Vilnius' ,'Aba', 'Abeokuta', 'Abovyan', 'Abuja', 'Accra', 'Adana', '...', 'Zaria', 'Zenica', 'Zhodzina', 'Zilina', 'Zvolen', 'Zürich', 'Other'];

        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }
    }
}
