<?php

use Illuminate\Database\Seeder;
use App\Airport;

class AirportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airports = config('airports');

        foreach ($airports as $airport) {

            $new_airport = new Airport();
            $new_airport->name = $airport['name'];
            $new_airport->code = $airport['code'];
            $new_airport->latitude = $airport['latitude'];
            $new_airport->longitude = $airport['longitude'];
            $new_airport->save();

        }
    }
}
