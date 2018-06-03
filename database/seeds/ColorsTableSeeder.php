<?php

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::truncate();
        $faker = Faker\Factory::create();

        $color_array = ['black'=>'Black', 'white'=>'White', 'red'=>'Red', 'pink'=>'Pink', 'yellow'=>'Yellow', 'orange'=>'Orange', 'yeallow_copper'=>'Yellow copper', 'silver'=>'Silver', 'grey'=>'Grey', 'green_coral'=>'Green coral', 'purple'=>'Purple'];
        foreach ($color_array as $key => $value) {
          Color::create([
            'name'          => $key,
            'display_name'  => $value,
          ]);
        }
    }
}
