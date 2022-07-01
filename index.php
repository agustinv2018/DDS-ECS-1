<?php

//Respetando la arquitectura propuesta en clase.
//Desarrollar una web, que reciba mediante post:
//year1
//year2
//year3
//year4
//year5
//year6
//year7
//year8
//year9
//year10
//Asignar estos valores dentro de un array llamado years.
//Luego, indicar los siguientes mensajes:
//Los años menores al año de la  caída del muro de Berlín(1989) son: …………………….
//Los años mayores al año de inicio de la pandemia por COVID(2020) son: ……………
//Los años menores al año de independencia de Argentina(1816) son: …………..
//Los años mayores al año en que nació El general San Martin(1778) son:...........
//Los años comprendidos entre el fin de la primera guerra mundial(1918) y el inicio de la segunda guerra mundial(1939) son:



$years = [$_POST['year1'], $_POST['year2'], $_POST['year3'], $_POST['year4'], $_POST['year5'], $_POST['year6'], $_POST['year7'], $_POST['year8'], $_POST['year9'], $_POST['year10']];


$msjmuro = 'Los años menores al año de la caída del muro de Berlin(1989) son: ';
$msjcovid = 'Los años mayores al año de inicio de la pandemia por COVID(2020) son: ';
$msjindep = 'Los años menores al año de la independecia de Argentina(1816) son :';
$msjgnral = 'Los años mayores al año en que nació El general San Martin(1778) son: ';
$msjguerra = 'Los años comprendidos entre el fin de la primera guerra mundial(1918) y el inicio de la segunda guerra mundial(1939) son: ';
define('MURO', 1989);
define('COVID', 2020);
define('INDEP', 1816);
define('GNRAL', 1778);
define('GRANG', 1918);
define('SGUERRA', 1939);

foreach ($years as $year) {
    if ($year < MURO) {

        $msjmuro = $msjmuro . $year . '-';
    }

    if($year > COVID){

        $msjcovid = $msjcovid . $year . '-';
    }

    if($year < INDEP){

        $msjindep = $msjindep . $year . '-';
        
    }

    if($year > GNRAL){

        $msjgnral = $msjgnral . $year . '-';

    }

    if($year >= GRANG & $year <= SGUERRA){

        $msjguerra = $msjguerra . $year . '-';
    }
}

echo $msjmuro;
echo '<hr>';
echo $msjcovid;
echo '<hr>';
echo $msjindep;
echo '<hr>';
echo $msjgnral;
echo '<hr>';
echo $msjguerra;
echo '<hr>';
