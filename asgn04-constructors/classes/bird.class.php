<?php

declare(strict_types=1);

class Bird
{
  public string $commonName;
  public string $latinName;

  public function __construct($args)
  {
    $this->commonName = $args['commonName'] ?? '';
    $this->latinName = $args['latinName'] ?? '';
  }

  public function description()
  {
    return "Common name: " . $this->commonName . "<br>" .
      "Latin name: " . $this->latinName;
  }
}
