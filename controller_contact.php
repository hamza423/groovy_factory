<?php

/* 
 * 
 * Controller qui va permetre d'ajouté les données dans la base de données
 * 
 */
include 'lib/init.php';

$contact = new contact();

$contact->loadFromTable($_POST);

$contact->insert();
