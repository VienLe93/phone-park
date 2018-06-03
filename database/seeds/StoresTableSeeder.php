<?php

use Illuminate\Database\Seeder;
use App\Models\Store;
use App\Models\City;
use App\Models\District;
use App\Models\Ward;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store::truncate();
        $faker = Faker\Factory::create();
        $city_id = $faker->unique()->randomElement($array = [1, 48, 79]);
        $district = District::where('city_id', $city)->pluck('id')->toArray();
        $district_id = $faker->randomElement($array = $district);
        $ward = Ward::where('district_id', $district_id)->pluck('id')->toArray();
        $ward_id = $faker->randomElement($array = $ward);

        for($i = 0 ;$i < 3; $i++)
        {
          Store::create([
            'address'     => $faker->address,
            'city_id'     => $city_id,
            'district_id' => $district_id,
            'ward_id'     => $ward_id,
          ]);
        }
    }
}
