<?php

namespace App\Http\Controllers;

class ListController extends Controller
{
    public function show()
    {
       $movies = [
         'Step Brothers' 			=> '2008',
         'Black Hawk Down'          => '2002',
         'Dumb and Dumber'         	=> '1994',
         'The Last of The Mohicans' => '1992',
         'The Godfather'         	=> '1972'
       ];

       return view('welcome')->withCharacters($movies);
    }
}