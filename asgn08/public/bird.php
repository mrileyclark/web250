<?php
// GRADED ASSIGNMENT: Build the single-bird detail page here.
// TODO: Validate ?id=..., call Bird::find_by_id(), display all seven fields,
// and handle both an invalid ID (400) and a missing bird (404).
// Use htmlspecialchars() or your existing h() helper for database text.
declare(strict_types=1);

require_once __DIR__ . '/../private/initialize.php';
require_once __DIR__ . '/../private/classes/Bird.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$page_title = 'Bird Details';
$error_message = null;
$bird = null;

if ($id === null || $id === false || $id < 1) {
  http_response_code(400);
  $page_title = 'Invalid Bird ID';
  $error_message = 'Please provide a valid bird ID.';
} else {
  try {
    $database = Database::connect();
    Bird::set_database($database);

    $bird = Bird::find_by_id($id);

    if ($bird === null) {
      http_response_code(404);
      $page_title = 'Bird Not Found';
      $error_message = 'The requested bird was not found with that ID.';
    }
  } catch (PDOException $exception) {
    http_response_code(500);
    error_log('asgn08 database error: ' . $exception->getMessage());
    $page_title = 'Database Error';
    $error_message = 'Bird details are temporarily unavailable. Please try again later.';
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $bird !== null ? h($bird->common_name) . ' - Bird Details' : h($page_title) ?></title>
</head>

<body>
  <?php if ($error_message !== null): ?>
    <h1><?= h($page_title) ?></h1>
    <p><?= h($error_message) ?></p>
  <?php else: ?>
    <h1><?= h($bird->common_name) ?></h1>

    <dl>
      <dt>Record ID</dt>
      <dd><?= (int) $bird->id ?></dd>

      <dt>Common Name</dt>
      <dd><?= h($bird->common_name) ?></dd>

      <dt>Scientific Name</dt>
      <dd><?= h($bird->scientific_name) ?></dd>

      <dt>Family</dt>
      <dd><?= h($bird->family_name) ?></dd>

      <dt>Habitat</dt>
      <dd><?= h($bird->primary_habitat) ?></dd>

      <dt>Season</dt>
      <dd><?= h($bird->seasonal_status) ?></dd>

      <dt>Description</dt>
      <dd><?= h($bird->description) ?></dd>
    </dl>
  <?php endif; ?>

  <p><a href="birds.php">Back to Bird Directory</a></p>
  <p><a href="index.php">Back to Assignment Home</a></p>
</body>

</html>
