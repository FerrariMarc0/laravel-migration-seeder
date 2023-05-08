<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsCSVTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $current_file = __DIR__."/csv/trains.csv";
        $trains = Helpers::getCSV($current_file);

        foreach($trains as $train){

            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_partenza = $train['orario_partenza'];
            $newTrain->orario_arrivo = $train['orario_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->save();
        }
    }
}
