<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewReservationRequest;
use App\Reservation;

class CreateReservation extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  NewReservationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(NewReservationRequest $request)
    {
        $reservation = Reservation::create($request->all());
        return redirect('success')->with('name', $request->input('name'));
    }
}
