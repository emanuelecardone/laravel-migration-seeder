<?php

use Illuminate\Database\Seeder;
use App\Voyage;
use Faker\Generator as Faker;

class VoyagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for($i = 0; $i < 10; $i++){
            //
            $new_voyage = new Voyage();
            $new_voyage->city = $faker->city();
            $new_voyage->date = $faker->date();
            $new_voyage->duration = rand(1, 7) . ' days';
            $new_voyage->save();
        }
    }
}
