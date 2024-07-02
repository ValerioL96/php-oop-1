<?php
//create un file index.php in cui:
//è definita una classe ‘Movie’
//=> all'interno della classe sono dichiarate delle variabili d'istanza
//=> all'interno della classe è definito un costruttore
//=> all'interno della classe è definito almeno un metodo
//vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

require_once __DIR__ . '/movies/movie.php';


$movie1 = new Movie("Fast & furios", "2001", "120 min");
//$movie1-> title ="Fast & furios";
//$movie1-> year ="2001";
//$movie1-> time ="120 min";

$movie2 = new Movie("Un weekend da bamboccioni", "2010", "102 min");
//$movie2-> title ="Un weekend da bamboccioni";
//$movie2-> year ="2010";
//$movie2-> time ="102 min";

var_dump($movie1,$movie2);
?>