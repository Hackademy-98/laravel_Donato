<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movies = [
            [
                "name" => "John Wick 4",
                "year" => 2023,
                "description" => "John Wick trova una via per sconfiggere la Gran Tavola. Ma prima di guadagnare la libertà, Wick deve affrontare un nuovo nemico che ha potenti alleanze in tutto il mondo e ha mezzi tali da tramutare vecchi amici in nuovi nemici.",
                "img" => "/media/john.jpg"
            ],
            [
                "name" => "Mission: Impossible",
                "year" => 2023,
                "description" => "Ethan Hunt e la sua squadra dell'IMF si trovano di fronte alla sfida più pericolosa che abbiano mai affrontato: trovare e disinnescare una nuova terrificante arma che minaccia l’ intera umanità. Con il destino del mondo e il controllo del futuro appesi a un filo, la squadra inizierà una frenetica missione in tutto il mondo, per impedire che l’arma cada nelle mani sbagliate. Messo di fronte a un nemico misterioso e onnipotente, tormentato da forze oscure del passato, Ethan sarà costretto a decidere se sacrificare tutto per questa missione, comprese le vite di coloro che gli stanno più a cuore.",
                "img" => "/media/mission.jpg"
            ],
            [
                "name" => "Guardiani della Galassia Vol. 3",
                "year" => 2023,
                "description" => "Peter Quill, ancora provato dalla perdita di Gamora, deve riunire la sua squadra per difendere l'universo e proteggere uno di loro. Una missione che, se non sarà portata a termine con successo, potrebbe portare alla fine dei Guardiani così come li conosciamo.",
                "img" => "/media/guardians.jpg"
            ]
        ];
        return view('films',["films"=>$movies]);
    }

    public function show($name){
        $movies = [
            [
                "name" => "John Wick 4",
                "year" => 2023,
                "description" => "John Wick trova una via per sconfiggere la Gran Tavola. Ma prima di guadagnare la libertà, Wick deve affrontare un nuovo nemico che ha potenti alleanze in tutto il mondo e ha mezzi tali da tramutare vecchi amici in nuovi nemici.",
                "img" => "/media/john.jpg"
            ],
            [
                "name" => "Mission: Impossible",
                "year" => 2023,
                "description" => "Ethan Hunt e la sua squadra dell'IMF si trovano di fronte alla sfida più pericolosa che abbiano mai affrontato: trovare e disinnescare una nuova terrificante arma che minaccia l’ intera umanità. Con il destino del mondo e il controllo del futuro appesi a un filo, la squadra inizierà una frenetica missione in tutto il mondo, per impedire che l’arma cada nelle mani sbagliate. Messo di fronte a un nemico misterioso e onnipotente, tormentato da forze oscure del passato, Ethan sarà costretto a decidere se sacrificare tutto per questa missione, comprese le vite di coloro che gli stanno più a cuore.",
                "img" => "/media/mission.jpg"
            ],
            [
                "name" => "Guardiani della Galassia Vol. 3",
                "year" => 2023,
                "description" => "Peter Quill, ancora provato dalla perdita di Gamora, deve riunire la sua squadra per difendere l'universo e proteggere uno di loro. Una missione che, se non sarà portata a termine con successo, potrebbe portare alla fine dei Guardiani così come li conosciamo.",
                "img" => "/media/guardians.jpg"
            ]
        ];
    
        foreach($movies as $movie){
            if($name == $movie["name"]){
                return view('detail',["serie"=>$movie]);
            }
        }
    
    }
}
