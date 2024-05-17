<?php

class Viaje
{
    private $costoViaje;
    private $costoTotalAbonado;
    private $col_objPasajero;
    private $cantMaximaPasajeros;

    public function __construct($costoViaje, $col_objPasajero, $cantMaximaPasajeros)
    {
        $this->costoViaje = $costoViaje;
        $this->costoTotalAbonado = 0;
        $this->col_objPasajero = $col_objPasajero;
        $this->cantMaximaPasajeros = $cantMaximaPasajeros;
    }

    //getters

    public function getCostoViaje()
    {
        return $this->costoViaje;
    }

    public function getCantMaximaPasajeros()
    {
        return $this->cantMaximaPasajeros;
    }

    public function getColObjPasajero()
    {
        return $this->col_objPasajero;
    }

    public function getCostoTotalAbonado()
    {
        return $this->costoTotalAbonado;
    }

    //setters

    public function setCostoViaje($costoViaje)
    {
        $this->costoViaje = $costoViaje;
    }

    public function setCostoTotalAbonado($costo)
    {
        $this->costoTotalAbonado = $costo;
    }

    public function setCantMaximaPasajeros($cantMaximaPasajeros)
    {
        $this->cantMaximaPasajeros = $cantMaximaPasajeros;
    }

    public function setColObjPasajero($col_objPasajero)
    {
        $this->col_objPasajero = $col_objPasajero;
    }
    //metodos

    public function venderPasaje($objPasajero)
    {
        $pasajeros = $this->getColObjPasajero();
        if ($this->hayPasajeDisponible()) {
            array_push($pasajeros, $objPasajero);
            $this->setColObjPasajero($pasajeros);
            $incremento = $objPasajero->darPorcentajeIncremento();
            $costoFinal = $this->getCostoViaje() + $this->getCostoViaje() * $incremento / 100;
            $this->setCostoTotalAbonado($this->getCostoTotalAbonado() + $costoFinal);
        }
        return $costoFinal;
    }

    public function hayPasajeDisponible()
    {
        $cantMaximaPasajeros = $this->getCantMaximaPasajeros();
        $cantPasajeros = count($this->getColObjPasajero());
        if ($cantMaximaPasajeros > $cantPasajeros) {
            return true;
        } else {
            return false;
        }
    }
}
