<?php

// Start the session if one has not already been started.
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$root = dirname(__DIR__);

require_once $root . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable($root);
$dotenv->load();

// Load the application files.
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/classes/Database.php';
require_once __DIR__ . '/classes/Bird.php';
require_once __DIR__ . '/classes/Member.php';

// Connect to the database.
$pdo = Database::connect();

Bird::set_database($pdo);
Member::set_database($pdo);
