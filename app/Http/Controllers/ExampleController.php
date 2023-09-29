<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homePage(){
        $myName = 'Aapo';
        $animals = ['Cat', 'Dog', 'Horse'];

        return view('homepage', ['allAnimals' => $animals, 'myName' => $myName]);
    }

    public function aboutPage(){
        return '<h1>About Page!!!</h1><a href="/">Back to home</a>';
    }
}
