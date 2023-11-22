<?php

// Importamos las clases necesarias
use Receta;
use Ingrediente;

// Instanciamos una nueva receta
$receta = new Receta("Torta de chocolate", 10, "Precalentar el horno a 180 grados.
Batir la mantequilla con el azúcar hasta que quede cremoso. Agregar los huevos uno a uno,
batiendo bien después de cada uno. Incorporar la harina y el cacao, alternando con la leche,
batiendo hasta que quede homogéneo. Verter la mezcla en un molde engrasado y enharinado.
Hornear durante 30 minutos o hasta que al insertar un palillo en el centro, este salga limpio.");

// Imprimimos la receta
echo $receta;
