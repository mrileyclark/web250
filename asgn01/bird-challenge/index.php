<?php

class Bird
{
  //class properties
  public $commonName;
  public $food = "bugs";
  public $nestPlacement = "tree";
  public $conservationLevel;

  //class methods
  public function song()
  {
    echo ("{$this->commonName} drink-your-tea!<br>");
  }

  public function canFly()
  {
    echo ("This {$this->commonName} can fly!<br>");
  }

  public function birdSongbirdSong()
  {
    echo ("{$this->commonName} whatwhat!!<br>");
  }
}

//create instance
$bird1 = new Bird();
$bird1->commonName = "Eastern Towhee";
$bird1->food = "seeds, fruits, insects, spiders";
$bird1->nestPlacement = "Ground";
$bird1->conservationLevel = "Low";

//create instance 2
$bird2 = new Bird();
$bird2->commonName = "Indigo Bunting";
$bird2->food = "small seeds, berries, buds, and insects";
$bird2->nestPlacement = "roadsides, and railroad rights-of-wafields and on the edges";
$bird2->conservationLevel = "Low";

$bird1->song();
$bird1->canFly();

$bird2->birdSongbirdSong();
$bird2->canFly();
