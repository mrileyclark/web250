<?php

declare(strict_types=1);

/**
 * GRADED ASSIGNMENT STARTER. Implement the TODOs yourself.
 * This is a read-only slice of Active Record; saving records comes later.
 */
final class Bird
{
  private static ?PDO $database = null;

  public int $id = 0;
  public string $common_name = '';
  public string $scientific_name = '';
  public string $family_name = '';
  public string $primary_habitat = '';
  public string $seasonal_status = '';
  public string $description = '';

  public static function set_database(PDO $pdo): void
  {
    // TODO: Save the PDO connection in the static property.
    self::$database = $pdo;
    //throw new LogicException('Implement Bird::set_database().');
  }

  /** @return Bird[] */
  public static function find_all(): array
  {
    // TODO: SELECT all birds, sorted by common_name. Return Bird objects.
    if (self::$database === null) {
      throw new RuntimeException('Call set_database() before find_all().');
    }

    $sql = 'SELECT id, common_name, scientific_name, family_name, primary_habitat, seasonal_status, description 
          FROM birds ORDER BY common_name';

    // Run the fixed SQL query; it contains no user input.
    $statement = self::$database->query($sql);
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    $birds = [];

    // Hydration: turn each associative row into a PHP object.
    foreach ($rows as $row) {
      $birds[] = self::from_row($row);
    }

    return $birds;
  }

  public static function find_by_id(int $id): ?self
  {
    // TODO: Use a prepared statement; return a Bird or null.
    if (self::$database === null) {
      throw new RuntimeException('Call set_database() before find_by_id().');
    }

    $sql = 'SELECT id, common_name, scientific_name, family_name, primary_habitat, seasonal_status, description 
          FROM birds WHERE id = :id';

    // Use a prepared statement to prevent SQL injection.
    $statement = self::$database->prepare($sql);
    // Bind the ID parameter to the prepared statement.
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    // Execute the prepared statement.
    $statement->execute();

    $row = $statement->fetch(PDO::FETCH_ASSOC);

    // If no row is found, return null 
    if ($row === false) {
      return null; // Bird not found
    }

    return self::from_row($row);
  }

  // Refactoring step
  private static function from_row(array $row): Bird
  {
    // TODO: Populate all seven properties and return the Bird object.
    $bird = new self();

    $bird->id = (int) $row['id'];
    $bird->common_name = (string) $row['common_name'];
    $bird->scientific_name = (string) $row['scientific_name'];
    $bird->family_name = (string) $row['family_name'];
    $bird->primary_habitat = (string) $row['primary_habitat'];
    $bird->seasonal_status = (string) $row['seasonal_status'];
    $bird->description = (string) $row['description'];

    return $bird;
  }

  public static function count_all(): int
  {
    // TODO: Return the number of rows in birds (no hydration needed).
    if (self::$database === null) {
      throw new RuntimeException('Call set_database() before count_all().');
    }

    $sql = 'SELECT COUNT(*) FROM birds';

    return (int) self::$database->query($sql)->fetchColumn();
  }
}
