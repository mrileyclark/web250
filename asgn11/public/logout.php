
<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/private/initialize.php';

// Log out the member and clear the session.
log_out_member();

// Return the user to the public home page.
redirect_to('index.php');

?>
