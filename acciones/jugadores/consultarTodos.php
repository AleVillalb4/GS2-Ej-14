<?php

header('Content-Type: application/json');

require_once 'response/consultarTodosResponse.php';
require_once '../../modelo/club.php';
require_once '../../modelo/jugador.php';

$cl1 = new Club();
$cl1->Nombre = 'Paris Saint-Germain Football Club';
$cl1->Fundacion = '2 de agosto de 1970 (52 años)';
$cl1->Presidente = 'Nasser Al-Khelaifi';

$cl2 = new Club();
$cl2->Nombre = 'Manchester United Football Club';
$cl2->Fundacion = '5 de marzo de 1878 (144 años)';
$cl2->Presidente = 'Joel Glazer';


$jug1 = new Jugador();
$jug1->Id = 1;
$jug1->Nombre = 'Lionel Andrés Messi';
$jug1->Apodos = 'La Pulga,  El Mesías,  D10S';
$jug1->Altura = '1.70 m';
$jug1->Club = $cl1;


$jug2 = new Jugador();
$jug2->Id = 2;
$jug2->Nombre = 'Lisandro Martinez';
$jug2->Apodos = 'Licha';
$jug2->Altura = '1.75 m';
$jug2->Club = $cl2;

$resp = new ConsultarTodosResponse();
$resp->ListJugadores[] = $jug1;
$resp->ListJugadores[] = $jug2;

echo json_encode($resp);
