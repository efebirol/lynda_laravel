<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    //GET and POST
    public function checkAvailableRooms($client_id){
        return view("rooms/checkAvailableRooms");
    }
}
