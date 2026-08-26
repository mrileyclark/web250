<?php

class Bird
{
    public string $commonName;
    public string $food = "bugs";
    public string $nestPlacement = "tree";
    public string $conservationLevel;

    public function song(): void
    {
        echo $this->commonName . " drink-your-tea!<br>";
    }

    public function canFly(): void
    {
        echo "This {$this->commonName} can fly!<br>";
    }

    public function birdSongbirdSong(): void
    {
        echo $this->commonName . " sings whatwhat!<br>";
    }
}

$bird1 = new Bird();
$bird1->commonName = "Eastern Towhee";
$bird1->food = "seeds, fruits, insects, spiders";
$bird1->nestPlacement = "Ground";
$bird1->conservationLevel = "Low";

$bird1->song();
$bird1->canFly();

$bird2 = new Bird();
$bird2->commonName = "Indigo Bunting";
$bird2->food = "small seeds, berries, buds, and insects";
$bird2->nestPlacement =
    "roadsides, and railroad rights-of-wafields and on the edges of woods";
$bird2->conservationLevel = "Low";

$bird2->birdSongbirdSong();
$bird2->canFly();

?>
