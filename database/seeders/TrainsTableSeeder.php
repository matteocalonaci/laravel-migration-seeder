<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

public function run(Faker $faker): void
    {
        for ($i=0; $i<10; $i++){
           $new_train = new Train();
           $new_train->Azienda = $faker->company();
           $new_train->Stazione_partenza = $faker->city();
           $new_train->Stazione_arrivo = $faker->city();
           $new_train->Orario_partenza = $faker->time();
           $new_train->Orario_arrivo = $faker->time();
           $new_train->Codice_treno = $faker->ean13();
           $new_train->Numero_carreggiate =$faker->numberBetween(5, 12);
           $new_train->In_orario = $faker->numberBetween(0, 1);
           $new_train->Cancellato  = $faker->numberBetween(0, 1);
           $new_train->save();
        }

    }
}


