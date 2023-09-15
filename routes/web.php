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
    return view('welcome');
});

Route::get('/paises', function () {
    return view('test', [
        "paises" => [
            "colombia" => [
                "capital" => "Bogotá",
                "moneda" => "COP",
                "poblacion" => 50880000,
                "descripcion" => "Colombia es un país del extremo norte de Sudamérica,
        Su paisaje cuenta con bosques tropicales, las montañas de
        los Andes y varias plantaciones de café. En Bogotá, su capital a gran altura, el
        distrito Zona Rosa es famoso por sus restaurantes y tiendas."
            ],
            "mexico" => [
                "capital" => "Ciudad de México",

                "moneda" => "MXN",
                "poblacion" => 128900000,

                "descripcion" => "México es un país entre los
        Estados Unidos y América Central, conocido por las playas en el Pacífico y el golfo
        de México, y su diverso paisaje de montañas, desiertos y selvas. Las ruinas
        antiguas, como Teotihuacán y la ciudad maya de Chichén Itzá, se distribuyen por
        el país, al igual que las ciudades de la época colonial española. En la capital Ciudad
        de México, las elegantes tiendas, los famosos museos y los restaurantes gourmet
        son parte de la vida moderna."
            ],
            "estados_unidos" => [
                "capital" => "Washington D.C",
                "moneda" => "USD",
                "poblacion" => 329500000,
                "descripcion" => "Estados Unidos es un país de 50
        estados que ocupa una extensa franja de América del Norte, con Alaska en el
        noroeste y Hawái que extiende la presencia del país en el océano Pacífico. Entre
        las principales ciudades de la costa del Atlántico, se encuentran Nueva York, un
        centro global financiero y cultural, y la capital Washington D. C. Chicago,
        metrópolis del medio oeste, es famosa por su influencia arquitectónica y, en la
        costa oeste, Hollywood, Los Ángeles, es famosa por la industria cinematográfica."

            ],
            "argentina" => [
                "capital" => "Buenos Aires",
                "moneda" => "ARS",
                "poblacion" => 44940000,
                "descripcion" => "Argentina es un país ubicado en el
        extremo sur de América. Su territorio está dividido en 23 provincias y una ciudad
        autónoma, Buenos Aires, capital de la nación y sede del gobierno federal. Su
        territorio está organizado en 23 provincias y una ciudad autónoma, Buenos Aires,
        capital de la nación y sede del gobierno federal. Es el octavo país más grande del
        mundo y el segundo en América Latina. Limita al norte con Bolivia y Paraguay, al
        noreste con Brasil, al este con Uruguay y el Océano Atlántico, al oeste y al sur con
        Chile."
            ],
            "brasil" => [
                "capital" => "Brasilia",
                "moneda" => "BRL",
                "poblacion" => 211000000,
                "descripcion" => "Brasil, un vasto país sudamericano,
        se extiende desde la cuenca del Amazonas en el norte hasta los viñedos y las
        enormes cataratas de Iguazú en el sur. Río de Janeiro, simbolizado por su estatua
        de 38 metros de altura del Cristo Redentor, ubicada en la cima del monte Corcovado,
        es famoso por sus animados barrios y sus famosas playas de Copacabana e
        Ipanema, así como por su gran y festivo carnaval, que cuenta con desfiles,
        carrozas, disfraces y samba."
            ],
            "chile" => [
                "capital" => "Santiago de Chile",
                "moneda" => "CLP",
                "poblacion" => 19100000,
                "descripcion" => "Chile es un país largo y angosto que se
        extiende a lo largo de la costa oeste de América del Sur, con más de 6000 km de
        costa en el Océano Pacífico. Santiago, su capital, se ubica en un valle rodeado de
        la cordillera de los Andes y la cordillera de la Costa. La Plaza de Armas, rodeada
        por edificios neoclásicos, contiene la Catedral Metropolitana y el Palacio de la
        Real Audiencia del siglo XVIII, que alberga el Museo Histórico Nacional."
            ]
        ],

        "registros_a_mostrar" => 3,
        "población_minima" => 100000000,
        "ordenar_por" => "moneda",
        "orden" => "DESC"
    ]);
});
