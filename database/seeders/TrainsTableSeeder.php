<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i<10; $i++){
           $new_train = new Train();
           $new_train->Azienda = 'Italo';
           $new_train->Stazione_partenza = 'Firenze';
           $new_train->Stazione_arrivo = 'Roma';
           $new_train->Orario_partenza = '09:30:00';
           $new_train->Orario_arrivo = '13:00:00';
           $new_train->Codice_treno = '91 83 2464 062-5 I-TI';
           $new_train->Numero_carreggiate = 10;
           $new_train->In_orario = true;
           $new_train->Cancellato  = false;
           $new_train->save();
        }

    }
}
