<?php

namespace App\Http\Controllers;

class ListController extends Controller
{
    public function show()
    {
        //change this to pul in movies from the DB and set it as an array in movies variable, then return it the same way





       $movies = [
         'Step Brothers' 			      => '2008',
         'Black Hawk Down'          => '2002',
         'Dumb and Dumber'         	=> '1994',
         'The Last of The Mohicans' => '1992',
         'The Godfather'         	  => '1972'
       ];

       return view('welcome')->withCharacters($movies);
    }

    public function json()
    {
        return view('json');
    }    
}