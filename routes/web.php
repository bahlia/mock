<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', function(){
    return redirect("panel");
})->name('home');

Route::post('/categoriaMach', [App\Http\Controllers\HomeController::class, 'categoriaMach'])->name('Categoria');

Route::get('/panel',function(){
    session(["user" => [
        "name" => "Bahimer Corp",
        "description" => "SOFTWARE DEVELOPERS",
        "categories" => [
            "software",
            "Seguridad"
        ],
        "tags" => [
            "make",
            "build",
            "deploy",
            "security"
        ],
        "tenders" => []
    ]]);

    session([
        "categories" => [
            "software",
            "IA",
            "Admin",
            "Seguridad",
            "API REST",
            "Tecnologia",
            "Vehiculos"

        ]
    ]);

    session([
        "tenders" => []
    ]);

    session([
        "company"=> [
            
            [
                "name"=> "Apple Inc.",
                "description"=> "Empresa lider en tecnologia, conocida por sus productos innovadores como el iPhone, iPad y Mac.",
                "categories" => [
                    "software",
                    "Tecnologia"
                ]
            ],
            [
                "name"=> "Coca-Cola Company",
                "description"=> "La empresa de bebidas no alcoholicas mas grande del mundo, reconocida por sus refrescos como Coca-Cola, Sprite y Fanta.",
                "categories"=> [
                    "Bebidas",
                    "Alimentos"
                ]
            ],
            [
                "name"=> "Microsoft Corporation",
                "description"=> "Empresa de tecnologia que desarrolla software y servicios como el sistema operativo Windows, la suite de Office y la plataforma en la nube Azure.",
                "categories" => [
                    "software",
                    "Tecnologia"
                ]
            ],                    
            [
                "name"=> "Amazon.com",
                "description"=> "Plataforma de comercio electronico y servicios en linea, conocida por su amplia seleccion de productos y la rapidez de sus envios a traves de Amazon Prime.",
                "categories"=> [
                    "Comercio electronico",
                    "Tienda virtual"
                ]
            ],
            [
                "name"=> "Toyota Motor Corporation",
                "description"=> "Empresa lider en la fabricacion de automoviles, reconocida por su calidad y durabilidad, con modelos populares como el Corolla, Camry y Prius.",
                "categories"=> [
                    "Automoviles",
                    "Vehiculos electricos",
                    "Motors"
                ]
            ],
            [
                "name"=> "Samsung Electronics Co., Ltd.",
                "description"=> "Empresa de tecnologia especializada en dispositivos electronicos como telefonos moviles, televisores y electrodomesticos.",
                "categories"=> [
                    "Automoviles",
                    "Vehiculos electricos",
                    "Motors"
                ]
            ],
            [
                "name"=> "Procter & Gamble Co.",
                "description"=> "Empresa de productos de consumo, fabricante de marcas reconocidas como Pampers, Pantene y Gillette.",
                "categories"=> [
                "Productos de consumo"
                ]
            ],
            [
                "name"=> "Nike, Inc.",
                "description"=> "Empresa lider en articulos deportivos, conocida por su calzado deportivo, ropa y accesorios.",
                "categories"=> [
                    "Articulos deportivos",
                    "Textil",
                    "Moda"
                ]
            ],
            [
                "name"=> "Pfizer Inc.",
                "description"=> "Empresa farmaceutica dedicada a la investigacion y desarrollo de medicamentos para mejorar la salud y el bienestar de las personas.",
                "categories"=> [
                    "Farmaceutica",
                    "Medicinas",
                    "Cura"
                ]    
            ],
            [
                "name"=> "McDonald's Corporation",
                "description"=> "Cadena internacional de restaurantes de comida rapida, conocida por su hamburguesa Big Mac, papas fritas y McNuggets.",
                "categories"=> [
                    "comida",
                    "Comida Rapida",
                    "Hambuguesas"
                ]
            ],
            [
                "name"=> "General Electric Company",
                "description"=> "Empresa enfocada en energia y tecnologia, que fabrica productos como turbinas de gas, equipos medicos y sistemas de iluminacion.",
                "categories"=> [
                    "Energia",
                    "Tecnologia",
                    "Electrodomesticos"
                ]
            ],
            [
                "name"=> "Facebook, Inc.",
                "description"=> "Red social y plataforma de comunicacion en linea, que permite a las personas conectarse, compartir contenido y comunicarse con otros usuarios.",
                "categories"=> [
                    "Redes sociales",
                    "Noticias"
                ]
            ],
            [
                "name"=> "Walmart Inc.",
                "description"=> "Gran cadena minorista, dedicada a la venta de una amplia variedad de productos en sus supermercados y tiendas de descuento.",
                "categories"=> [
                    "Minorista",
                    "Tienda viertual"
                ]
            ],
            [
                "name"=> "Alphabet Inc. (Google)",
                "description"=> "Empresa de tecnologia y servicios en linea, conocida por su motor de búsqueda Google, su sistema operativo Android y sus servicios en la nube.",
                "categories"=> [
                    "Tecnologia",
                    "servicios en linea"
                ]
            ],
            [
                "name"=> "Visa Inc.",
                "description"=> "Proveedor de servicios financieros, que facilita la realizacion de pagos electronicos en todo el mundo a traves de sus tarjetas de credito y debito.",
                "categories"=> [
                    "Servicios financieros",
                    "Banco",
                    "Finanzas"
                ]
            ],
            [
                "name"=> "Exxon Mobil Corporation",
                "description"=> "Empresa lider en la industria del petroleo y gas, dedicada a la exploracion, produccion y distribucion de energia a nivel global.",
                "categories"=> [
                    "Energia",
                    "Nuclear",
                    "Fisica"
                ]
            ],
            [
                "name"=> "The Walt Disney Company",
                "description"=> "Empresa de entretenimiento lider, que opera parques tematicos, estudios de cine, canales de television como Disney Channel y la plataforma de streaming Disney+.",
                "categories"=> [
                    "Entretenimiento",
                    "Pelicula",
                    "Cine"
                ]
            ],
            [
                "name"=> "Ford Motor Company",
                "description"=> "Fabricante de automoviles",
                "categories"=> [
                    "Automoviles",
                    "Viajes"
                ]
            ],
            [
                "name"=> "Intel Corporation",
                "description"=> "Empresa de tecnologia",
                "categories"=> [
                    "Tecnologia",
                    "procesadores"
                ]
            ],
            [
                "name"=> "3M Company",
                "description"=> "Empresa de manufactura y tecnologia",
                "categories"=> [
                    "Manufactura",
                    "tecnologia"
                ] 
            ]          
        ]
]);
    return view("panel");
})->name("panel");

Route::get('/match/{id}',function($id){
    return view('match',[
        "id" => $id
    ]);
    
})->name('match');

Route::get('/licitaciones',function(){
    return view("licitaciones");
})->name('licitaciones');

Route::get('/licitaciones/crear',function(){
    return view("licitaciones-crear");
})->name('crear');