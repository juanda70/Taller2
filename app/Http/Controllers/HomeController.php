<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public static $data = [
        [
        "Id"=>1,
        "Nombre"=>"Pepito perez",
        "Altura"=> 170,
        "Habilidad"=> "Lanzar piedras",
        "Imagen"=> "https://storage.googleapis.com/pokenea/pokenea8.jpg",
        "FraseFilosofica"=> "Hace mucho tiempo le hago caso al corazonY pasan los dias, los meses, pensando en tu olorHa llegado el tiempo para usar la razonAnte' que sea tarde y, sin querer, me parta en dos"
        ],
        [
        "Id"=>2,
        "Nombre"=>"Andres perez",
        "Altura"=> 175,
        "Habilidad"=>"Estudiar",
        "Imagen"=>"https://storage.googleapis.com/pokenea/pokenea7.jpg" ,
        "FraseFilosofica"=>"Y solo mirame
        Con esos ojitos lindos
        Que, con eso, yo estoy bien
        Ya he vuelto a nacer",
        ],
        [
        "Id"=>3,
        "Nombre"=>"Martin perez",
        "Altura"=>180,
        "Habilidad"=>"Dormir",
        "Imagen"=> "https://storage.googleapis.com/pokenea/pokenea6.jpg",
        "FraseFilosofica"=>"Hace tiempoQue no agarro a nadie de la manoHace tiempo que no envioBuenos dias, te amo",
        ],
        [
        "Id"=>4,
        "Nombre"=> "Julio Jaramillo",
        "Altura"=> 165,
        "Habilidad"=> "Cantar",
        "Imagen"=>"https://storage.googleapis.com/pokenea/pokenea5.jpg",
        "FraseFilosofica"=> "Aqui no existe el pecado
        Y equivocarse es bonito
        Los errores son placeres
        Igual que to' tus besito'",
        ],
        [
        "Id"=>5,
        "Nombre"=> "Beatriz yusta",
        "Altura"=> 163,
        "Habilidad"=> "Cantar",
        "Imagen"=>"https://storage.googleapis.com/pokenea/pokenea4.jpg",
        "FraseFilosofica"=> "Yo no me dejo llevar de nadie
        Yo solo me dejo llevar de tu sonrisa
        Y del lunar cerquita de tu boca
        Si yo estoy loco, tu estas loquita",
        ],
        [
        "Id"=>6,
        "Nombre"=> "Alberto jaramillo",
        "Altura"=> 185,
        "Habilidad"=> "Jugar",
        "Imagen"=>"https://storage.googleapis.com/pokenea/pokenea3.jpg",
        "FraseFilosofica"=> "Antes de que salga el Sol, brinda el acelerador
        Que vaya sin freno y pierda el control
        Nada mas seremos dos, tu y yo acariciandonos
        En medio del tiempo, sin decir adios",
        ],
        [
        "Id"=>7,
        "Nombre"=> "Juan Montoya",
        "Altura"=> 155,
        "Habilidad"=> "Modelar",
        "Imagen"=>"https://storage.googleapis.com/pokenea/pokenea2.jpg",
        "FraseFilosofica"=> "Y solo mirame
        Con esos ojitos lindos
        Que, con eso, yo estoy bien
        Hoy he vuelto a nacer",
        ],
        [
        "Id"=>8,
        "Nombre"=> "Umberto uzzi",
        "Altura"=> 165,
        "Habilidad"=> "Escribir",
        "Imagen"=>"https://storage.googleapis.com/pokenea/pokenea1.jpg",
        "FraseFilosofica"=> "Porque mañana quiza no vo' a estar
        La luz se puso roja, hay que parar
        O si quieres, nos bajamos y podemos perrear
        Baby, esto no fue normal",
        ]
    ];

    public function index()
    {
        return view('home.index');
    }
    public function pokenea()
    {
        $totalQuotes = (count(HomeController::$data));
        $randomNumber = (rand(0,($totalQuotes-1)));
        $randomQuote = HomeController::$data[$randomNumber];
        $pokenea = ["id"=>$randomQuote["Id"],
        "Nombre"=>$randomQuote["Nombre"],
        "Frase"=>$randomQuote["FraseFilosofica"],
        "imagen"=>$randomQuote["Imagen"]
        ];
        return view('home.pokenea')->with("viewData", $pokenea);
    }
    public function json()
    {
        $totalQuotes = (count(HomeController::$data));
        $randomNumber = (rand(0,($totalQuotes-1)));
        $randomQuote = HomeController::$data[$randomNumber];
        $pokenea = ["id"=>$randomQuote["Id"],
        "Nombre"=>$randomQuote["Nombre"],
        "Altura"=>$randomQuote["Altura"],
        "Habilidad"=>$randomQuote["Habilidad"]
        ];
        return response()->json(['quote' => $pokenea]);
    }
}
