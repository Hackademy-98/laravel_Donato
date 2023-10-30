<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index() {
        $series = [
            ["name" => "The Witcher", "year" => 2019, "description" => "Geralt di Rivia, un cacciatore di mostri mutante, viaggia verso il suo destino in un mondo turbolento in cui le persone spesso si dimostrano più perverse delle bestie.", "img" => "media/the_witcher.jpg"],
            ["name" => "Peaky Blinders", "year" => 2013, "description" => "La storia di una famiglia criminale nella Birmingham del 1919, Inghilterra, centrata sulle vicende di una gang che nasconde delle lame di rasoio nelle visiere dei propri cappelli e del loro capo Tommy Shelby, che aspira a trovare il suo posto nel mondo.", "img" => "media/peaky_blinders.jpg"],
            ["name" => "Vikings", "year" => 2013, "description" => "Vikings è una serie televisiva storica canadese iniziata nel 2013 e prodotta da History Channel .", "img" => "media/vikings.jpg"],
            ["name" => "Fringe", "year" => 2008, "description" => "La Divisione Fringe si occupa di indagare su una serie di eventi inspiegabili, noti come Eventi Fringe, che si stanno verificando in varie parti del mondo. Ne fanno parte lo scienziato Walter Bishop, suo figlio Peter e l'agente dell'FBI Oli via Dunham.", "img" => "media/fringe.jpg"],
            ["name" => "Gomorra", "year" => 2014, "description" => "", "img" => "media/gomorra.jpg"],
            ["name" => "Hannibal", "year" => 2013, "description" => "", "img" => "media/hannibal.jpg"],
        ];
    
    
        return view('series', ['serieTV' => $series]);
    }

    public function show($name){
        $series = [
            ["name" => "The Witcher", "year" => 2019, "description" => "Geralt di Rivia, un cacciatore di mostri mutante, viaggia verso il suo destino in un mondo turbolento in cui le persone spesso si dimostrano più perverse delle bestie.", "img" => "/media/the_witcher.jpg"],
            ["name" => "Peaky Blinders", "year" => 2013, "description" => "La storia di una famiglia criminale nella Birmingham del 1919, Inghilterra, centrata sulle vicende di una gang che nasconde delle lame di rasoio nelle visiere dei propri cappelli e del loro capo Tommy Shelby, che aspira a trovare il suo posto nel mondo.", "img" => "/media/peaky_blinders.jpg"],
            ["name" => "Vikings", "year" => 2013, "description" => "Vikings è una serie televisiva storica canadese iniziata nel 2013 e prodotta da History Channel .", "img" => "/media/vikings.jpg"],
            ["name" => "Fringe", "year" => 2008, "description" => "La Divisione Fringe si occupa di indagare su una serie di eventi inspiegabili, noti come Eventi Fringe, che si stanno verificando in varie parti del mondo. Ne fanno parte lo scienziato Walter Bishop, suo figlio Peter e l'agente dell'FBI Oli via Dunham.", "img" => "/media/fringe.jpg"],
            ["name" => "Gomorra", "year" => 2014, "description" => "", "img" => "/media/gomorra.jpg"],
            ["name" => "Hannibal", "year" => 2013, "description" => "", "img" => "/media/hannibal.jpg"],
        ];
        // per ogni elemento presente in series
            // se il nome è uguale al nome del singolo elemento dell'array
                // manda il singolo elemento alla vista detail
    
        foreach($series as $serie){
            if ($name == $serie["name"]){
               return view('detail', ["serie"=>$serie]);
            }
        }
    }
}
