<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //CLI created client controller

    public function index(){
        return __METHOD__;
    }
    
    public function newClient(){
        return __METHOD__;
    }
    
    public function create(){
        return __METHOD__;
    }

    public function show($client_id){
        return __METHOD__.":".$client_id;
    }

    //REST-Post Methode über die URL "/clients/{client_id}"
    public function modify($client_id){
        return __METHOD__.":".$client_id;
    }
    
}
