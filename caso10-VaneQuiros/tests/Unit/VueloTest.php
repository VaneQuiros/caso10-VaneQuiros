<?php

// Importar la clase Vuelo
require_once "Vuelo.php";

// Instanciar la clase Vuelo
$vuelo = new Vuelo();

// Establecer los atributos
$vuelo->id = 1;
$vuelo->numeroVuelo = "AA1234";
$vuelo->avion = new Avion();
$vuelo->avion->id = 1;
$vuelo->avion->modelo = "Boeing 737";
$vuelo->avion->capacidad = 150;
$vuelo->origen = new Aeropuerto();
$vuelo->origen->id = 1;
$vuelo->origen->nombre = "Aeropuerto Internacional de Los Ángeles";
$vuelo->origen->ciudad = "Los Ángeles";
$vuelo->destino = new Aeropuerto();
$vuelo->destino->id = 2;
$vuelo->destino->nombre = "Aeropuerto Internacional Guanacaste";
$vuelo->destino->ciudad = "Liberia";

// Imprimir
echo "Id: " . $vuelo->id . PHP_EOL;
echo "Número de vuelo: " . $vuelo->numeroVuelo . PHP_EOL;
echo "Avión: " . $vuelo->avion->modelo . PHP_EOL;
echo "Origen: " . $vuelo->origen->nombre . PHP_EOL;
echo "Destino: " . $vuelo->destino->nombre . PHP_EOL;
