<?php

class Receta
{
    public $nombreReceta;
    public $raciones;
    public $instrucciones;

    public function __construct($nombreReceta, $raciones, $instrucciones)
    {
        $this->nombreReceta = $nombreReceta;
        $this->raciones = $raciones;
        $this->instrucciones = $instrucciones;
    }

    public function __toString()
    {
        return "{$this->nombreReceta} ({$this->raciones} raciones)\n" .
               "Instrucciones:\n" .
               "{$this->instrucciones}";
    }
}
