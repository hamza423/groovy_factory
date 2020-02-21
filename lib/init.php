<?php

/*
 * 
 * initialisation de la base de donnée
 * 
 */

//Affichage des erreurs
ini_set('display_errors',1); 
error_reporting(E_ALL);

global $bdd;

$bdd = new PDO("mysql:host=localhost; dbname=projets_groovy_hserhane_dev; charset=UTF8", "hserhane-exam", "Automata=26");


include 'classes/contact.php';
include 'classes/musique.php';