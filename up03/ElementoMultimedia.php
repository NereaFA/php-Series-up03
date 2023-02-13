<?php

//require_once ".php";


class ElementoMultimedia
{
    private $duracion;

    public function __construct($duracion)
    {
        $this->duracion = $duracion;
    }
    
    /**
     * Get the value of duracion
     */ 
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set the value of duracion
     *
     * @return  self
     */ 
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }
}