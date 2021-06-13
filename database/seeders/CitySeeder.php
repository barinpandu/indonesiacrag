<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = file_get_contents(database_path('seeders/libs/cities.txt'));
        $cities = str_replace('"},{"', '"}separator{"', $cities);
        $cities = explode('separator', $cities);

        foreach ($cities as $ct) {
            $city = json_decode($ct);
            City::create([
                'id' => $city->city_id,
                'province_id' => $city->province_id,
                'name' => $city->city_name
            ]);
        }
    }
}
