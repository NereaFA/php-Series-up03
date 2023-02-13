<?php

require_once 'Capitulo.php';

class Temporada
{
    public array $capitulos;
    public int $año;
    public int $numTemporada;
   

    public function __construct($capitulos, $año, $numTemporada){
        $this->numTemporada = $numTemporada;
        $this->año = $año;
        $this->capitulos = $capitulos;
    }

    public function totalCapitulos()
    {
        return count($this->capitulos);
    }

    public function valoracionCapitulos()
    {
        $valoracionCapitulos = 0;
        foreach($this->capitulos as $capitulo)
        {
            $valoracionCapitulos += $capitulo->getValoracion();
        }
        return $valoracionCapitulos;
    }
    // otra forma de hacerlo sin el bucle:
    // public function valorCapitulos()
    // {
    //     return array_sum(array_map(fn($capi)=> $capi->valoracion,$this->capitulos));
    // }

}