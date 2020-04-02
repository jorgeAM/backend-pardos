<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ListReservations extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $reservations = Reservation::paginate(15);
        return $reservations;
    }
}
