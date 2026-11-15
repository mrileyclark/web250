<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/private/initialize.php';

$errors = [];
$success = '';

if (is_post()) {

  // Get the submitted username and password.
  $username = trim($_POST['username'] ?? '');
  $password = $_POST['password'] ?? '';

  // Check required fields.
  if ($username === '' || $password === '') {
    $errors[] = 'Username and password are required.';
  }

  // Find the member and verify the password.
  if (empty($errors)) {

    $member = Member::find_by_username($username);

    if (
      $member &&
      password_verify($password, $member->password_hash)
    ) {
      // Log in the member and store session information.
      log_in_member($member);

      // Redirect to the home page after login.
      redirect_to('index.php');
    } else {
      $errors[] = 'Invalid username or password.';
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>

  <h1>Login</h1>

  <?php foreach ($errors as $error): ?>
    <p><?= h($error) ?></p>
  <?php endforeach; ?>

  <?php if ($success !== ''): ?>
    <p><?= h($success) ?></p>
  <?php endif; ?>

  <form action="login.php" method="post">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <br><br>

    <button type="submit">Login</button>

  </form>

  <p><a href="signup.php">Create an account</a></p>

  <p><a href="index.php">Home</a></p>

</body>

</html>
