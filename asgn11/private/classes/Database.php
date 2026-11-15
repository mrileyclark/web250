<?php

declare(strict_types=1);

class Database
{
  private static ?PDO $connection = null;

  public static function connect(): PDO
  {
    // Reuse this request's connection instead of opening another one.
    if (self::$connection instanceof PDO) {
      return self::$connection;
    }
    // The DSN tells PDO which driver, server, and database to use.
    $dsn = 'mysql:host=' . $_ENV['DB_HOST']
      . ';port=' . $_ENV['DB_PORT']
      . ';dbname=' . $_ENV['DB_NAME']
      . ';charset=utf8mb4';

    self::$connection = new PDO(
      $dsn,
      $_ENV['DB_USER'],
      $_ENV['DB_PASS'],
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
      ]
    );

    return self::$connection;
  }
}
