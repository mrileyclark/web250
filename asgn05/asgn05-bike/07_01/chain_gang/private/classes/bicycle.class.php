<?php

class Bicycle
{
  public $brand;
  public $model;
  public $year;
  public $category;
  public $color;
  public $description;
  public $gender;
  public $price;
  /*
  * Why is weight protected while something such as $brand can be public?
  * Weight is protected because the class has special methods for setting and displaying the weight. The class stores it in kilograms and can * *convert * it to pounds when needed. I don't want other code changing the weight directly.

  *Brand is public because it is just basic information about the bicycle and doesn't need the same kind of special handling.
  */
  protected $weight_kg;
  protected $condition_id;

  public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

  public const GENDERS = ['Mens', 'Womens', 'Unisex'];

  /*
  * Why is it protected rather than public?
  *I made it protected because it is something the Bicycle class uses internally to find the condition name. I don't need other parts of the *program *to directly access the list.

  *Why does the CSV store condition_id instead of the word "Good"?
  *The CSV uses a number like 3 to represent the condition. The class can use that number to look up the word "Good" in CONDITION_OPTIONS. This keeps *the CSV data simple and lets the condition names be managed in one place.
  */
  protected const CONDITION_OPTIONS = [
    1 => 'Beat up',
    2 => 'Decent',
    3 => 'Good',
    4 => 'Great',
    5 => 'Like New'
  ];

  /*
  * Why is one associative array useful compared with ten individual parameters?
  * An associative array lets me pass in the values by name instead of having to remember the order of ten different parameters. It also lets me *leave out values that I don't have because the constructor has default values. It is easier to read than having a constructor with a long list *of parameters.
  */
  public function __construct($args = [])
  {
    //$this->brand = isset($args['brand']) ? $args['brand'] : '';
    $this->brand = $args['brand'] ?? '';
    $this->model = $args['model'] ?? '';
    $this->year = $args['year'] ?? '';
    $this->category = $args['category'] ?? '';
    $this->color = $args['color'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->gender = $args['gender'] ?? '';
    $this->price = $args['price'] ?? 0;
    $this->weight_kg = $args['weight_kg'] ?? 0.0;
    $this->condition_id = $args['condition_id'] ?? 3;

    // Caution: allows private/protected properties to be set
    // foreach($args as $k => $v) {
    //   if(property_exists($this, $k)) {
    //     $this->$k = $v;
    //   }
    // }
  }

  /*
  * Weight is protected because the class has special methods for setting and displaying the weight. 
  * The class stores it in kilograms and can convert it to pounds when needed. I don't want other code changing the weight directly.
  * Brand is public because it is just basic information about the bicycle and doesn't need the same kind of special handling.
  */
  public function weight_kg()
  {
    return number_format($this->weight_kg, 2) . ' kg';
  }

  public function set_weight_kg($value)
  {
    $this->weight_kg = floatval($value);
  }

  public function weight_lbs()
  {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
    return number_format($weight_lbs, 2) . ' lbs';
  }

  /*
  * Why does a setter receiving pounds store the underlying property in kilograms?
  * The class uses kilograms as the main way to store the bicycle's weight. 
  * If someone gives the weight in pounds, the method converts it to kilograms before storing it. 
  * This means I only need to keep one weight value instead of storing both kilograms and pounds.
  */
  public function set_weight_lbs($value)
  {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

  /*
  * Why does a method exist instead of simply storing a $condition property?
  * The method takes the condition_id and finds the matching condition name. 
  * This means I only have to store the ID and don't have to store both the ID and the condition name. 
  * It also gives me a place to handle an unknown or invalid condition.
  */
  public function condition()
  {
    if ($this->condition_id > 0) {
      return self::CONDITION_OPTIONS[$this->condition_id];
    } else {
      return "Unknown";
    }
  }
}
