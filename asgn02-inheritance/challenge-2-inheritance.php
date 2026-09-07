<?php

//parent class
class Animal
{
  //public $name;
  //public $species;
  //public $age;

  private $name;
  protected $species;
  private $age;


  //give animal name and species 
  public function describeAnimal($name, $species)
  {
    $this->name = $name;
    $this->species = $species;
  }

  // getters for private properties
  public function getName()
  {
    return $this->name;
  }

  //setter for private age
  public function setAge($age)
  {
    //only set age if it's a non-negative value
    if ($age >= 0) {
      $this->age = $age;
    }
  }

  //getter for private age
  public function getAge()
  {
    return $this->age;
  }

  //all animals can sleep
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
    //use getters to access private properties name and age
    return "Woof! My name is " . $this->getName() . ", the " . $this->breed . " " . $this->species . ". I am " . $this->getAge() . " years old.";
  }

  public function fetch()
  {
    //use getter to access private name property
    return $this->getName() . " is fetching the ball!";
  }
}

class Cat extends Animal
{
  //give cat color
  public $color;

  public function meow()
  {
    //use getters to access private properties name and age
    return "Meow! My name is " . $this->getName() . ", the " . $this->color . " " . $this->species . ". I am " . $this->getAge() . " years old.";
  }

  public function climb()
  {
    //use getter to access private name property
    return $this->getName() . " is climbing the tree!";
  }
}

$dog1 = new Dog();
$dog1->describeAnimal("Buddy", "Canine");
$dog1->setAge(5);
$dog1->breed = "Golden Retriever";

$cat1 = new Cat();
$cat1->describeAnimal("Whiskers", "Feline");
$cat1->setAge(3);
$cat1->color = "Orange";

echo $dog1->bark() . "<br>";  // Output: Woof! My name is Buddy, the Golden Retriever Canine.
echo $dog1->fetch() . "<br>"; // Output: Buddy is fetching the ball!
echo $dog1->sleep() . "<br>"; // Output: Buddy is sleeping.

echo $cat1->meow() . "<br>"; // Output: Meow! My name is Whiskers, the Orange Feline.
echo $cat1->climb() . "<br>"; // Output: Whiskers is climbing the tree!
echo $cat1->sleep() . "<br>"; // Output: Whiskers is sleeping.

echo get_parent_class($dog1) . "<br>";
echo get_parent_class($cat1) . "<br>";
