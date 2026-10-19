<?php

declare(strict_types=1);

class Bird
{
  public string $commonName;
  public string $latinName;

  public function __construct($commonName, $latinName)
  {
    $this->commonName = $commonName;
    $this->latinName = $latinName;
  }
}

$bird1 = new Bird("Robin", "Turdus migratorius");

$bird2 = new Bird("Eastern Towhee", "Pipilo erythrophthalmus");

echo "Common name: " . $bird1->commonName . "<br>";
echo "Latin name: " . $bird1->latinName . "<br>";

echo "<hr>";

echo "Common name: " . $bird2->commonName . "<br>";
echo "Latin name: " . $bird2->latinName . "<br>";
