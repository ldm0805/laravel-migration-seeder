<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class HouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<=10; $i++){

            $newTrain = new Train();
            $newTrain->azienda = $faker->word(1);
            $newTrain->stazione_di_partenza = $faker->word1(1);
            $newTrain->stazione_di_arrivo = $faker->word(1);
            $newTrain->orario_di_partenza = $faker->word(1);
            $newTrain->orario_di_arrivo = $faker->word(1);
            $newTrain->codice_treno = $faker->word(1);
            $newTrain->numero_carrozze = $faker->numberBetween(1, 30);
            $newTrain->in_orario = $faker->randomElement([true,false]);
            $newTrain->cancellato = $faker->randomElement([true,false]);
            $newTrain->save();
        }

    }
}