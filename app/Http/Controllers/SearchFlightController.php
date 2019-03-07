<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Flight;
use App\FlightClass;
use App\City;

class SearchFlightController extends Controller
{
    public function index()
    {
      $cities = City::all();
      $flightClasses = FlightClass::all();
      return view('index', [
        'cities' => $cities,
        'flightClasses' => $flightClasses
      ]);
    }

    public function search(Request $request)
    {
      $flights = Flight::all();
      $input = $request->all();

      $whereClause = [
        'flight_city_from_id' => $input['from'],
        'flight_city_to_id' => $input['to'],
        'flight_departure_date' => $input['departure-date'],
        'flight_return_date' => $input['return-date'],
        'flight_type' => $input['flight_type'],
        'flight_class_id' => $input['flight-class'],
        //'flight_total_passenger' => $input['total-passenger']
      ];
      $results = Flight::
      where([
          ['flight_city_from_id', '=', $input['from']],
          ['flight_city_to_id', '=', $input['to']],
          ['flight_type', '=', $input['flight_type']],
          ['flight_class_id', '=', $input['flight-class']],
          ['flight_departure_date', '=', $input['departure-date']],
          ['flight_return_date', '=', $input['return-date']],
        ])->get();

      return view('flight-list', [
        'flights' => $flights,
        'input' => $input,
        'results' => $results
      ]);
    }
}
