<?php

class PasajeroNecesidadesEspeciales extends Pasajero
{
    private $servicioSillaDeRuedas;
    private $servicioEmbarque;
    private $comidaEspecial;
    public function __construct($nombre, $nroAsiento, $nroTicket, $servicioSillaDeRuedas, $servicioEmbarque, $comidaEspecial)
    {
        parent::__construct($nombre, $nroAsiento, $nroTicket);
        $this->servicioSillaDeRuedas = $servicioSillaDeRuedas;
        $this->servicioEmbarque = $servicioEmbarque;
        $this->comidaEspecial = $comidaEspecial;
    }

    //getters

    public function getServicioSillaDeRuedas()
    {
        return $this->servicioSillaDeRuedas;
    }

    public function getServicioEmbarque()
    {
        return $this->servicioEmbarque;
    }

    public function getComidaEspecial()
    {
        return $this->comidaEspecial;
    }

    //setters

    public function setServicioSillaDeRuedas($servicioSillaDeRuedas)
    {
        $this->servicioSillaDeRuedas = $servicioSillaDeRuedas;
    }

    public function setServicioEmbarque($servicioEmbarque)
    {
        $this->servicioEmbarque = $servicioEmbarque;
    }

    public function setComidaEspecial($comidaEspecial)
    {
        $this->comidaEspecial = $comidaEspecial;
    }

    //metodos
    public function darPorcentajeDeIncremento()
    {
        $incremento = 0;
        if ($this->getServicioEmbarque() == true && $this->getServicioSillaDeRuedas() == true && $this->getComidaEspecial() == true) {
            $incremento = 20 + parent::darPorcentajeDeIncremento();
        } else {
            $incremento = 5 + parent::darPorcentajeDeIncremento();
        }
        return $incremento;
    }
}
