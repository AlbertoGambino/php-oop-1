<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Movie{

    public $titolo;
    public $descrizione;

    public function __construct($titolo, $descrizione = null){

        $this -> titolo = $titolo;

        if($descrizione == null){

            $this -> descrizione = 'Nothing found';
        } else{

            $this -> descrizione = $descrizione;
        }


    }

    public function getString(){

        return "Movie title: " . $this -> titolo . " description: " . $this -> descrizione;
    }
}

class TestController extends Controller
{
    public function home(){

        $movie1 = new Movie('Il signore degli anelli', 'Amazing');

        $movie2 = new Movie('Fearless');

        $movie3 = new Movie('Avengers','Spettacolare');

        $movie4 = new Movie('Fast and Furious');

        $movies = [

            $movie1,
            $movie2,
            $movie3,
            $movie4
        ];

        $str1 = $movie1 -> getString();

        $str2 = $movie2 -> getString();

        $str = '';

        /* dd($movies); */

        foreach ($movies as $movie){

            $str .= $movie -> getString() . "\n";
        }

         dd($str);

        return view("pages.home");
    }
}
