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

        $train->azienda = $faker;
        $train->stazione_partenza = 'Firenze';
        $train->stazione_arrivo = 'Torino';
        $train->orario_partenza = '2024-03-21 02:00:00';
        $train->orario_arrivo = '2024-03-21 05:40:00';
        $train->codice_treno = '54547';
        $train->numero_carrozze = '10';
        $train->in_orario = 1;
        $train->cancellato = 0;

        $train->save();
    }
}
