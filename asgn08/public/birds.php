<?php
// GRADED ASSIGNMENT: Build the bird directory page here.
// TODO: require private/initialize.php, get Bird::find_all(), output an
// accessible HTML table of bird names, scientific names, habitat, season,
// and links to bird.php?id=... . Escape all database-derived text.
declare(strict_types=1);

require_once __DIR__ . '/../private/initialize.php';
require_once __DIR__ . '/../private/classes/Bird.php';

$birds = [];
$error_message = null;

try {
  $database = Database::connect();
  Bird::set_database($database);
  $birds = Bird::find_all();
} catch (PDOException $exception) {
  http_response_code(500);
  error_log('asgn08 database error: ' . $exception->getMessage());
  $error_message = 'The bird directory is temporarily unavailable.';
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WNC Bird Directory</title>
</head>

<body>
  <h1>WNC Bird Directory</h1>

  <p><a href="index.php">Back to Assignment Home</a></p>

  <?php if ($error_message !== null): ?>
    <p><?= h($error_message) ?></p>

  <?php elseif (empty($birds)): ?>
    <p>No birds were found in the directory.</p>

  <?php else: ?>
    <table style="border: 1px solid black;">
      <caption>Bird species directory</caption>
      <thead>
        <tr>
          <th scope="col" style="border: 1px solid black;">Common Name</th>
          <th scope="col" style="border: 1px solid black;">Scientific Name</th>
          <th scope="col" style="border: 1px solid black;">Primary Habitat</th>
          <th scope="col" style="border: 1px solid black;">Seasonal Status</th>
          <th scope="col" style="border: 1px solid black;">Details</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($birds as $bird): ?>
          <tr>
            <td style="border: 1px solid black;"><?= h($bird->common_name) ?></td>
            <td style="border: 1px solid black;"><?= h($bird->scientific_name) ?></td>
            <td style="border: 1px solid black;"><?= h($bird->primary_habitat) ?></td>
            <td style="border: 1px solid black;"><?= h($bird->seasonal_status) ?></td>
            <td style="border: 1px solid black;">
              <a href="bird.php?id=<?= (int) $bird->id ?>">
                View details
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>
</body>

</html>
