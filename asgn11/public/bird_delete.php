<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/private/initialize.php';

require_login();

$error_message = '';

if (is_post()) {
  $id = filter_input(
    INPUT_POST,
    'id',
    FILTER_VALIDATE_INT,
    ['options' => ['min_range' => 1]]
  );
} else {
  $id = filter_input(
    INPUT_GET,
    'id',
    FILTER_VALIDATE_INT,
    ['options' => ['min_range' => 1]]
  );
}

if ($id === false || $id === null) {
  http_response_code(400);
  $bird = null;
  $error_message = 'A valid Bird ID is required.';
} else {
  $bird = Bird::find_by_id($id);

  if ($bird === null) {
    http_response_code(404);
    $error_message = 'Bird not found.';
  }
}

if (is_post() && $bird !== null) {
  if ($bird->delete()) {
    redirect_to('birds.php');
  }

  $error_message = 'The Bird could not be deleted.';
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Delete Bird</title>
</head>

<body>
  <h1>Delete Bird</h1>

  <?php if ($error_message !== ''): ?>
    <p><?= h($error_message) ?></p>
  <?php endif; ?>

  <?php if ($bird !== null): ?>
    <p><strong>ID:</strong> <?= (int) $bird->id ?></p>
    <p><strong>Name:</strong> <?= h($bird->common_name) ?></p>
    <p>Are you sure you want to delete this Bird?</p>

    <form action="bird_delete.php" method="post">
      <input type="hidden" name="id" value="<?= (int) $bird->id ?>">
      <button type="submit">Delete Bird</button>
    </form>
  <?php endif; ?>

  <p><a href="birds.php">Cancel</a></p>
</body>

</html>
