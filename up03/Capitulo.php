<?php

class Capitulo extends ElementoMultimedia
{
    private $numeroCapitulo;
    private $titulo;
    private $fechaEstreno;
    private $valoracion;

    public function __construct( $numeroCapitulo, $titulo, $fechaEstreno, $duracion, $valoracion)
    {
        $this->numeroCapitulo = $numeroCapitulo;
        $this->titulo = $titulo;
        $this->fechaEstreno = $fechaEstreno;
        parent::__construct($duracion);
        $this->valoracion = $valoracion;
    }
   

    /**
     * Get the value of numeroCapitulo
     */ 
    public function getNumeroCapitulo()
    {
        return $this->numeroCapitulo;
    }

    /**
     * Set the value of numeroCapitulo
     *
     * @return  self
     */ 
    public function setNumeroCapitulo($numeroCapitulo)
    {
        $this->numeroCapitulo = $numeroCapitulo;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of fechaEstreno
     */ 
    public function getFechaEstreno()
    {
        return $this->fechaEstreno;
    }

    /**
     * Set the value of fechaEstreno
     *
     * @return  self
     */ 
    public function setFechaEstreno($fechaEstreno)
    {
        $this->fechaEstreno = $fechaEstreno;

        return $this;
    }

    /**
     * Get the value of valoracion
     */ 
    public function getValoracion()
    {
        return $this->valoracion;
    }

    /**
     * Set the value of valoracion
     *
     * @return  self
     */ 
    public function setValoracion($valoracion)
    {
        $this->valoracion = $valoracion;

        return $this;
    }
}