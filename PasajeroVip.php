<?php

class PasajeroVip extends Pasajero
{
    private $nroViajeroFrecuente;
    private $cantMillas;

    public function __construct($nombre, $nroAsiento, $nroTicket, $nroViajeroFrecuente, $cantMillas)
    {
        parent::__construct($nombre, $nroAsiento, $nroTicket);
        $this->nroViajeroFrecuente = $nroViajeroFrecuente;
        $this->cantMillas = $cantMillas;
    }

    public function darPorcentajeIncremento()
    {
        $incremento = 0;
        if ($this->cantMillas > 300) {
            $incremento = 20 + parent::darPorcentajeDeIncremento();
        } else {
            $incremento = 25 + parent::darPorcentajeDeIncremento();
        }
        return $incremento;
    }
}
