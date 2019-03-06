<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Flight;

class SearchFlightController extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function search(Request $request)
    {
      $flights = Flight::all();
      $input = $request->all();

      return view('flight-list', [
        'flights' => $flights,
        'input' => $input
      ]);
    }
}
