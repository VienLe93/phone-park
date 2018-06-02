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

        $color_array = ['black', 'white', 'red', 'pink', 'yellow', 'orange', 'yellow copper', 'silver', 'grey', 'green coral', 'purple'];

        
    }
}
