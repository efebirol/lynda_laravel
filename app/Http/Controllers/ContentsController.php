<?php

namespace App\Http\Controllers;

class ContentsController extends Controller
{
    public function home()
    {
        // return __METHOD__; //Magic Konstante

        return view("contents/home");
    }
}
