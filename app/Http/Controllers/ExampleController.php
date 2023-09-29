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
        return view('single-post');
    }
}
