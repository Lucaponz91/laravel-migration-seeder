<?php
use App\TrainTable;
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
                'company' => 'Trenitalia',
                'departure_station' => 'Roma',
                'arrival_station' => 'Milano',
                'departure_time' => '8:00',
                'arrival_time' => '11:00',
                'code' => rand(100,999),
                'train_cars' => 9,
                'on_time' => false,
                'aborted' => false,
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Ancona',
                'arrival_station' => 'Milano',
                'departure_time' => '8:00',
                'arrival_time' => '13:00',
                'code' => rand(100,999),
                'train_cars' => 9,
                'on_time' => false,
                'aborted' => false
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Lecce',
                'arrival_station' => 'Bologna',
                'departure_time' => '12:30',
                'arrival_time' => '13:00',
                'code' => rand(100,999),
                'train_cars' => 9,
                'on_time' => false,
                'aborted' => false
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Bologna',
                'arrival_station' => 'Milano',
                'departure_time' => '5:00',
                'arrival_time' => '13:00',
                'code' => rand(100,999),
                'train_cars' => rand(2,9),
                'on_time' => false,
                'aborted' => false
            ],
        ];
        foreach ($trains as $train) {
            $newTrain = new TrainTable();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->code = $train['code'];
            $newTrain->train_cars = $train['train_cars'];
            $newTrain->on_time = $train['on_time'];

            $newTrain->save();
        }
    }
}
