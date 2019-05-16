<?php
// //Funkcja
// function delta($a,$b,$c){
// $delta=$b*$b-4*$a*$c;
// return $delta;
// }
// //Klasy
// class delta2{
//     function __construct($a,$b,$c){
//         $delta=$b*$b-4*$a*$c;
//         return $delta;
//     }
// }
//włączamy pełne raportowanie błędów
error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
//czy coś istnieje?
if(
    isset($_GET['a']) AND 
    isset($_GET['b']) AND 
    isset($_GET['c']))
    {
        if(
        is_numeric($_GET['a']) AND 
        is_numeric($_GET['b']) AND 
        is_numeric($_GET['c'])){
    //PObieramy dane wysłane przez uytkownika do tabeli GET      
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];

     $delta=$b*$b-4*$a*$c;
    //$delta=delta($a,$b,$c);
    //$delta= new $delta2($a,$b,$c); <---coś jest ni tak, ale na razie to yolo

    if($delta>0){
        $x1=(-$b-sqrt($delta))/2 *$a;
        $x2=(-$b+sqrt($delta))/2 *$a;

        include('views/delta-greater.php');
    }
    elseif($delta==0){
        $x=-$b/2*$a;

        include('views/delta-equal.php');
    }
    else{
        echo'Nie ma miejsc zerowych';

        include('views/delta-less.php');
    }

        }
        else{
            include('views/error.php');
        } 
    }
    else{
        include('views/form.php');
    }