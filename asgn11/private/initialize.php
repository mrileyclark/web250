<?php

session_start();

$project_root = dirname(__DIR__);
$private_path = __DIR__;

// Check that Composer dependencies are installed.
$autoload = $project_root . '/vendor/autoload.php';

if (!file_exists($autoload)) {
  exit('Composer dependencies are missing. Run: composer install');
}

// Load Composer dependencies.
require_once $autoload;

// Load environment variables.
$dotenv = Dotenv\Dotenv::createImmutable($project_root);
$dotenv->load();

// Load the application files.
require_once $private_path . '/functions.php';
require_once $private_path . '/classes/Database.php';
require_once $private_path . '/classes/Bird.php';
require_once $private_path . '/classes/Member.php';

// Connect to the database.
$pdo = Database::connect();

Bird::set_database($pdo);
Member::set_database($pdo);
