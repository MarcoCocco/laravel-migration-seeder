<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $trainsFile = fopen(__DIR__ . '/../trains.csv', 'r');

        $trainsCSV = fgetcsv($trainsFile);
        $trainsCSV = fgetcsv($trainsFile);


        while ($trainsCSV != false) {
            $train = new Train();

            $train->company = $trainsCSV[0];
            $train->departure_station = $trainsCSV[1];
            $train->arrival_station = $trainsCSV[2];
            $train->departure_time = $trainsCSV[3];
            $train->arrival_time = $trainsCSV[4];
            $train->train_code = $trainsCSV[5];
            $train->wagons_number = $trainsCSV[6];
            $train->on_time = $trainsCSV[7];
            $train->cancelled = $trainsCSV[8];

            $train->save();
            $trainsCSV = fgetcsv($trainsFile);
        };

        /* $faker = Faker::create();

       for ($i = 0; $i < 15; $i++) {
            $train = new Train();

            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->data_partenza = $faker->dateTimeBetween('-10 days', '+20 days');
            $train->codice_treno = $faker->unique()->randomNumber(9);
            $train->numero_carrozze = $faker->numberBetween(2, 12);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            //$train->save();
       } */
    }
}
