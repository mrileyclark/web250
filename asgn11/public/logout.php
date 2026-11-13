<?php

require_once dirname(__DIR__) . '/private/initialize.php';

$errors = [];
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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
      // Regenerate the session ID after login.
      session_regenerate_id(true);

      // Store member information in the session.
      $_SESSION['member_id'] = $member->id;
      $_SESSION['username'] = $member->username;
      $_SESSION['role'] = $member->role;

      $success = 'Login successful!';
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

  <?php
  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo '<p>' . htmlspecialchars($error) . '</p>';
    }
  }

  if ($success !== '') {
    echo '<p>' . htmlspecialchars($success) . '</p>';
  }
  ?>

  <form action="login.php" method="post">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <br><br>

    <button type="submit">Login</button>

  </form>

</body>

</html>p
