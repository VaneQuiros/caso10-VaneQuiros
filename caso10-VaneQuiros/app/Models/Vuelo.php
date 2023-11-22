<?php

public class Vuelo
{
    public int Id { get; set; }
    public string NumeroVuelo { get; set; }
    public Avion Avion { get; set; }
    public Aeropuerto Origen { get; set; }
    public Aeropuerto Destino { get; set; }

    public Vuelo(int id, string numeroVuelo, Avion avion, Aeropuerto origen, Aeropuerto destino)
    {
        this.Id = id;
        this.NumeroVuelo = numeroVuelo;
        this.Avion = avion;
        this.Origen = origen;
        this.Destino = destino;
    }
}
