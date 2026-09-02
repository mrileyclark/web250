<?php

class Bird
{
    // class properties
    public $commonName;
    public $food;
    public $nestPlacement;
    public $conservationLevel;

    // class methods
    public function song($sound)
    {
        echo ("{$this->commonName} {$sound}!<br>");
    }

    public function canFly($flying)
    {
        echo ("This {$this->commonName} {$flying}!<br>");
    }

    public function birdSong($sound)
    {
        echo ("{$this->commonName} {$sound}!!<br>");
    }
}

// Create an instance of the Bird class
$bird1 = new Bird();
$bird1->commonName = "Eastern Towhee";
$bird1->food = "seeds, fruits, insects, spiders";
$bird1->nestPlacement = "Ground";
$bird1->conservationLevel = "Low";

// Create another instance of the Bird class
$bird2 = new Bird();
$bird2->commonName = "Indigo Bunting";
$bird2->food = "small seeds, berries, buds, and insects";
$bird2->nestPlacement = "roadsides, railroad rights-of-way, fields, and edges of woods";
$bird2->conservationLevel = "Low";

// Call the methods
$bird1->song("drink-your-tea");
$bird1->canFly("can fly");

$bird2->birdSong("whatwhat");
$bird2->canFly("can fly");

?>
