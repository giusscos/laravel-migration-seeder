<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Francavilla',
                'stazione_di_arrivo' => 'Bari',
                'orario_di_partenza' => '2022-10-12 13:00:00',
                'orario_di_arrivo' => '2022-10-12 16:00:00',
                'codice_treno' => rand(1234, 4567),
                'numero_carrozze' => rand(1,4),
                'in_orario' => rand(0, 1),
                'cancellato' => rand(0, 1),
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Genoca',
                'stazione_di_arrivo' => 'Roma',
                'orario_di_partenza' => '2022-08-12 20:00:00',
                'orario_di_arrivo' => '2022-08-13 06:00:00',
                'codice_treno' => rand(1234, 4567),
                'numero_carrozze' => rand(1,4),
                'in_orario' => rand(0, 1),
                'cancellato' => rand(0, 1),
            ],
            [
                'azienda' => 'Italo',
                'stazione_di_partenza' => 'Napoli',
                'stazione_di_arrivo' => 'Sibari',
                'orario_di_partenza' => '2021-08-12 20:00:00',
                'orario_di_arrivo' => '2021-08-13 01:00:00',
                'codice_treno' => rand(1234, 4567),
                'numero_carrozze' => rand(1,4),
                'in_orario' => rand(0, 1),
                'cancellato' => rand(0, 1),
            ],
            [
                'azienda' => 'Italo',
                'stazione_di_partenza' => 'Savona',
                'stazione_di_arrivo' => 'Pescara',
                'orario_di_partenza' => '2022-10-12 20:00:00',
                'orario_di_arrivo' => '2022-10-13 01:00:00',
                'codice_treno' => rand(1234, 4567),
                'numero_carrozze' => rand(1,4),
                'in_orario' => rand(0, 1),
                'cancellato' => rand(0, 1),
            ],
        ];

        foreach($trains as $train){
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->save();
        }
    }
}
