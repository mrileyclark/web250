<?php

//parent class
class Animal
{
  public $name;
  public $species;

  //give animal name and species
  public function describeAnimal($name, $species)
  {
    $this->name = $name;
    $this->species = $species;
  }
}

class Dog extends Animal
{
  //give dog breed
  public $breed;

  public function bark()
  {
    return "Woof! My name is " . $this->name . ", the " . $this->breed . " " . $this->species . ".";
  }
}

class Cat extends Animal
{
  //give cat color
  public $color;

  public function meow()
  {
    return "Meow! My name is " . $this->name . ", the " . $this->color . " " . $this->species . ".";
  }
}

$dog1 = new Dog();
$dog1->describeAnimal("Buddy", "Canine");
$dog1->breed = "Golden Retriever";

$cat1 = new Cat();
$cat1->describeAnimal("Whiskers", "Feline");
$cat1->color = "Orange";

echo $dog1->bark() . "<br>";  // Output: Woof! My name is Buddy, the Golden Retriever Canine.
echo $cat1->meow() . "<br>"; // Output: Meow! My name is Whiskers, the Orange Feline.

echo get_parent_class($dog1) . "<br>"; // Output: Animal
echo get_parent_class($cat1) . "<br>"; // Output: Animal
