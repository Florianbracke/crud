<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

// Show errors so we get helpful information
 ini_set('display_errors', '1');
 ini_set('display_startup_errors', '1');
 error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/plantRepository.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password']);
$databaseManager->connect();

// This example is about a Pokémon plant collection
// Update the naming if you'd like to work with another collection
$plantRepository = new plantRepository($databaseManager);
$plants = $plantRepository->get();

// Load your view
// Tip: you can load this dynamically and based on a variable, if you want to load another view


if (!empty($_GET['edit'])){
    $plants = $plantRepository->update();
    require 'edit.php';
} else {
   require 'overview.php'; 
}