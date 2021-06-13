<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subdistrict;

class SubdistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subdistricts = file_get_contents(database_path('seeders/libs/subdistricts.txt'));
        $subdistricts = str_replace('"},{"', '"}separator{"', $subdistricts);
        $subdistricts = explode('separator', $subdistricts);

        foreach ($subdistricts as $sub) {
            $subs = json_decode($sub);
            Subdistrict::create([
                'id' => $subs->subdistrict_id,
                'city_id' => $subs->city_id,
                'name' => $subs->subdistrict_name
            ]);
        }
    }
}
