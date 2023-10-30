<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//rotta per i film
Route::get('/films', function () {
    $movies = [
        [
            "name" => "John Wick 4",
            "year" => 2023,
            "description" => "John Wick trova una via per sconfiggere la Gran Tavola. Ma prima di guadagnare la libertà, Wick deve affrontare un nuovo nemico che ha potenti alleanze in tutto il mondo e ha mezzi tali da tramutare vecchi amici in nuovi nemici.",
            "img" => "media/john.jpg"
        ],
        [
            "name" => "Mission: Impossible",
            "year" => 2023,
            "description" => "Ethan Hunt e la sua squadra dell'IMF si trovano di fronte alla sfida più pericolosa che abbiano mai affrontato: trovare e disinnescare una nuova terrificante arma che minaccia l’ intera umanità. Con il destino del mondo e il controllo del futuro appesi a un filo, la squadra inizierà una frenetica missione in tutto il mondo, per impedire che l’arma cada nelle mani sbagliate. Messo di fronte a un nemico misterioso e onnipotente, tormentato da forze oscure del passato, Ethan sarà costretto a decidere se sacrificare tutto per questa missione, comprese le vite di coloro che gli stanno più a cuore.",
            "img" => "media/mission.jpg"
        ],
        [
            "name" => "Guardiani della Galassia Vol. 3",
            "year" => 2023,
            "description" => "Peter Quill, ancora provato dalla perdita di Gamora, deve riunire la sua squadra per difendere l'universo e proteggere uno di loro. Una missione che, se non sarà portata a termine con successo, potrebbe portare alla fine dei Guardiani così come li conosciamo.",
            "img" => "media/guardians.jpg"
        ]
    ];
    return view('films',["films"=>$movies]);
});

//rotta serie tv
Route::get('/series', function () {
    $series = [
        ["name" => "The Witcher", "year" => 2019, "description" => "Geralt di Rivia, un cacciatore di mostri mutante, viaggia verso il suo destino in un mondo turbolento in cui le persone spesso si dimostrano più perverse delle bestie.", "img" => "media/the_witcher.jpg"],
        ["name" => "Peaky Blinders", "year" => 2013, "description" => "La storia di una famiglia criminale nella Birmingham del 1919, Inghilterra, centrata sulle vicende di una gang che nasconde delle lame di rasoio nelle visiere dei propri cappelli e del loro capo Tommy Shelby, che aspira a trovare il suo posto nel mondo.", "img" => "media/peaky_blinders.jpg"],
        ["name" => "Vikings", "year" => 2013, "description" => "Vikings è una serie televisiva storica canadese iniziata nel 2013 e prodotta da History Channel .", "img" => "media/vikings.jpg"],
        ["name" => "Fringe", "year" => 2008, "description" => "La Divisione Fringe si occupa di indagare su una serie di eventi inspiegabili, noti come Eventi Fringe, che si stanno verificando in varie parti del mondo. Ne fanno parte lo scienziato Walter Bishop, suo figlio Peter e l'agente dell'FBI Oli via Dunham.", "img" => "media/fringe.jpg"],
        ["name" => "Gomorra", "year" => 2014, "description" => "", "img" => "media/gomorra.jpg"],
        ["name" => "Hannibal", "year" => 2013, "description" => "", "img" => "media/hannibal.jpg"],
    ];


    return view('series', ['serieTV' => $series]);
});