<?php

namespace App\Http\Controllers;

class AnimalController extends Controller
{
    public function getData(){
        return view('animals');
    }
}
