<?php

class Ingrediente
{
    public $nombre;
    public $cantidad;
    public $unidadDeMedida;

    public function __construct($nombre, $cantidad, $unidadDeMedida)
    {
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->unidadDeMedida = $unidadDeMedida;
    }

    public function __toString()
    {
        return "{$this->nombre} ({$this->cantidad} {$this->unidadDeMedida})";
    }
}
