<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airport;
use App\Flight;

class AirportController extends Controller
{
    public function index(Request $request)
 {
   $airports = Airport::all();
   $all_flights = Flight::all();
   $flights_min_price = Flight::orderBy('price', 'asc')->limit(1)->get();

   $data = [
       'airports' => $airports,
       'all_flights' => $all_flights,
       'flights_min_price' => $flights_min_price
   ];

   return view ('airports', $data);
 }
}
