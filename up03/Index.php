<?php
require_once "Serie.php";
require_once "Temporada.php";
require_once "Capitulo.php";

$capitulo[] = new Capitulo(1, "La vida","Enero 2018",40, 5.7);
$capitulo[] = new Capitulo(2, "La vida 2","Febrero 2018",42, 8);
$capitulo[] = new Capitulo(3, "La vida 3","Febrero 2018",41, 7.1);
$capitulo[] = new Capitulo(4, "La vida 4","Febrero 2018",45, 6);

$temporadas[0] = new Temporada(1, 2018, $capitulo);
$temporadas[1] = new Temporada(2, 2018, $capitulo);

$serie[0] = new Serie("La casa de la Pradera", "Comedia", $temporada);
$serie[1] = new Serie("Rick y Morty", "Comedia", $temporada);

$consultaSerie = 0;
$consultaTemporada = 0;
$nombreSerie = $serie[$consultaSerie]->getNombreSerie();
$tCapitulos = $serie[$consultaSerie]->totalCapitulos($consultaTemporada);
$valoracionMedia = $series[$consultaSerie]->valoracionMedia();

echo "La serie $nombreSerie tiene $tCapitulos capitulos en la $consultaTemporada temporada<br>";
echo "La valoracion media es $valoracionMedia<br>";


//http://localhost/php-exercises-master/php-03-POO/up03/index.php