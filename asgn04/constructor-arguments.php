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
}

$bird1 = new Bird([
  'commonName' => 'Acadian Flycatcher',
  'latinName' => 'Turdus migratorius'
]);

$bird2 = new Bird([
  'commonName' => 'Eastern Towhee',
  'latinName' => 'Pipilo erythrophthalmus'
]);

echo "Common name: " . $bird1->commonName . "<br>";
echo "Latin name: " . $bird1->latinName . "<br>";

echo "<hr>";

echo "Common name: " . $bird2->commonName . "<br>";
echo "Latin name: " . $bird2->latinName . "<br>";
