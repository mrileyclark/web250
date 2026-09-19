<?php

require 'autoload.php';

$flycatcher = new Bird([
  'commonName' => 'Acadian Flycatcher',
  'latinName' => 'Empidonax virescens'
]);

echo $flycatcher->description();
