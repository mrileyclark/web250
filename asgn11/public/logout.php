
<?php

require_once dirname(__DIR__) . '/private/initialize.php';

// Clear the member's session.
$_SESSION = [];

// Destroy the session.
session_destroy();

// Return the user to the public home page.
header('Location: index.php');
exit;

?>
