<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/private/initialize.php';

$errors = [];
$success = '';

if (is_post()) {

  // Retrieve submitted form values.
  $first_name = trim($_POST['first_name'] ?? '');
  $last_name = trim($_POST['last_name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $username = trim($_POST['username'] ?? '');
  $password = $_POST['password'] ?? '';
  $confirm_password = $_POST['confirm_password'] ?? '';

  // Check required fields.
  if (
    $first_name === '' ||
    $last_name === '' ||
    $email === '' ||
    $username === '' ||
    $password === '' ||
    $confirm_password === ''
  ) {
    $errors[] = 'All fields are required.';
  }

  // Check email format.
  if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
  }

  // Check password length.
  if ($password !== '' && strlen($password) < 8) {
    $errors[] = 'Password must be at least 8 characters.';
  }

  // Check password confirmation.
  if ($password !== $confirm_password) {
    $errors[] = 'Passwords do not match.';
  }

  // Check for an existing username or email.
  if (empty($errors)) {

    $pdo = Database::connect();

    // Check username.
    $sql = 'SELECT id FROM members WHERE username = :username LIMIT 1';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username]);

    if ($stmt->fetch()) {
      $errors[] = 'That username is already being used.';
    }

    // Check email.
    $sql = 'SELECT id FROM members WHERE email = :email LIMIT 1';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email]);

    if ($stmt->fetch()) {
      $errors[] = 'That email address is already registered.';
    }
  }

  // Register the member if there are no validation errors.
  if (empty($errors)) {

    // Hash the password before storing it.
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new member into the database.
    $sql = 'INSERT INTO members
                (first_name, last_name, email, username, password_hash, role)
                VALUES
                (:first_name, :last_name, :email, :username, :password_hash, :role)';

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
      'first_name' => $first_name,
      'last_name' => $last_name,
      'email' => $email,
      'username' => $username,
      'password_hash' => $passwordHash,
      'role' => 'member'
    ]);

    $success = 'Registration successful!';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
</head>

<body>

  <h1>Sign Up</h1>

  <?php foreach ($errors as $error): ?>
    <p><?= h($error) ?></p>
  <?php endforeach; ?>

  <?php if ($success !== ''): ?>
    <p><?= h($success) ?></p>
  <?php endif; ?>

  <form action="signup.php" method="post">

    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required>

    <br><br>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required>

    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <br><br>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <br><br>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>

    <br><br>

    <button type="submit">Create Account</button>
  </form>

  <p>Already have an account? <a href="login.php">Log In</a></p>

  <p><a href="index.php">Home</a></p>

</body>

</html>
