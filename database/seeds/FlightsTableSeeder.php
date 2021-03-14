<?php

use Illuminate\Database\Seeder;
use App\Flight;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flights = config('flights');

        foreach ($flights as $flight) {

            $new_flight = new Flight();
            $new_flight->code_departure = $flight['code_departure'];
            $new_flight->code_arrival = $flight['code_arrival'];
            $new_flight->price = $flight['price'];
            $new_flight->save();

        }
    }
}
