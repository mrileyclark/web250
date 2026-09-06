<?php

//parent class
class Animal
{
  public $name;
  public $species;
  public $age;

  //give animal name and species and age
  public function describeAnimal($name, $species, $age)
  {
    $this->name = $name;
    $this->species = $species;
    $this->age = $age;
  }

  public function sleep()
  {
    return $this->name . " is sleeping.";
  }
}


//subclass 
class Dog extends Animal
{
  //give dog breed
  public $breed;

  public function bark()
  {
    return "Woof! My name is " . $this->name . ", the " . $this->breed . " " . $this->species . ". I am " . $this->age . " years old.";
  }

  public function fetch()
  {
    return $this->name . " is fetching the ball!";
  }
}

class Cat extends Animal
{
  //give cat color
  public $color;

  public function meow()
  {
    return "Meow! My name is " . $this->name . ", the " . $this->color . " " . $this->species . ". I am " . $this->age . " years old.";
  }

  public function climb()
  {
    return $this->name . " is climbing the tree!";
  }
}

$dog1 = new Dog();
$dog1->describeAnimal("Buddy", "Canine", 5);
$dog1->breed = "Golden Retriever";

$cat1 = new Cat();
$cat1->describeAnimal("Whiskers", "Feline", 3);
$cat1->color = "Orange";

echo $dog1->bark() . "<br>";  // Output: Woof! My name is Buddy, the Golden Retriever Canine.
echo $dog1->fetch() . "<br>"; // Output: Buddy is fetching the ball!
echo $dog1->sleep() . "<br>"; // Output: Buddy is sleeping.

echo $cat1->meow() . "<br>"; // Output: Meow! My name is Whiskers, the Orange Feline.
echo $cat1->climb() . "<br>"; // Output: Whiskers is climbing the tree!
echo $cat1->sleep() . "<br>"; // Output: Whiskers is sleeping.

echo get_parent_class($dog1) . "<br>"; // Output: Animal
echo get_parent_class($cat1) . "<br>"; // Output: Animal
