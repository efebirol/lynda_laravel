<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //CLI created client controller

    public function index(){
        return view("client/index");
    }
    
    public function newClient(){
        return view("client/newClient");
    }
    
    public function create(){
        return view("client/create");
    }

    public function show($client_id){
        return view("client/show");
    }

    //REST-Post Methode über die URL "/clients/{client_id}"
    public function modify($client_id){
        return __METHOD__.":".$client_id;
    }
    
}
