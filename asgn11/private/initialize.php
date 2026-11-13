<?php

declare(strict_types=1);

// Load Composer and its packages.
require_once dirname(__DIR__) . '/vendor/autoload.php';

// Load the database settings from the .env file.
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
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
