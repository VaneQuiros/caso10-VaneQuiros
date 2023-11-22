<?php

public class Aeropuerto
{
    public int Id { get; set; }
    public string Nombre { get; set; }
    public string Ciudad { get; set; }

    public Aeropuerto(int id, string nombre, string ciudad)
    {
        this.Id = id;
        this.Nombre = nombre;
        this.Ciudad = ciudad;
    }
}
