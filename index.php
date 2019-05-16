<?php
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
    $a=$_GET['b'];
    $a=$_GET['c'];

    $delta=$b*$b-4*$a*$c;

    if($delta>0){
        $x1=(-$b-sqrt($delta))/2 *$a;
        $x1=(-$b+sqrt($delta))/2 *$a;

        include('views/delta-greater.php');
    }
    elseif($delta==0){
        $x=-$b/2*$a;
    }
    else{
        echo'Nie ma miejsc zerowych';
    }

        }
        else{
            include('views/error.php');
        } 
    }
    else{
        include('views/form.php');
    }