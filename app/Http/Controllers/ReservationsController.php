<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    //
    public function bookRoom($room_id, $date_in, $date_out){
        return view("reservations/bookRoom");
    }
}
