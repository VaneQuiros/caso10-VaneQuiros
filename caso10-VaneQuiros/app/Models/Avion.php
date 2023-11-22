<?php

public class Avion
{
    public int Id { get; set; }
    public string Modelo { get; set; }
    public int Capacidad { get; set; }

    public Avion(int id, string modelo, int capacidad)
    {
        this.Id = id;
        this.Modelo = modelo;
        this.Capacidad = capacidad;
    }
}
