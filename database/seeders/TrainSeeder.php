<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train = new Train;

        $train->azienda = $faker->company();
        $train->stazione_partenza = $faker->city();
        $train->stazione_arrivo = $faker->city();
        $train->orario_partenza = $faker->date();
        $train->orario_arrivo = $faker->date();
        $train->codice_treno = $faker->randomNumber(5, true);
        $train->numero_carrozze = $faker->numberBetween(3, 20);
        $train->in_orario = 1;
        $train->cancellato = 0;

        $train->save();
    }
}
