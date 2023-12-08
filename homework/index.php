
<?php

//////////////////// Tecknology Class begins///////////////////
class Technology
{
    public $initial;
    public $countThing;
    public $name;
    public $status;
    public $ticketNum;

    public $tool1;
    public $tool2;
    public $tool3;

    public function __construct($name, $status, $ticketNum)
    {
        $this->name = $name;
        $this->status = $status;
        $this->ticketNum = $ticketNum;
    }

    public function welcoming($initial)
    {
        return "Dear guests,Welcome to our " . $this->initial = $initial . " night" . "<br>";
    }

    public function getThing($countThing)
    {
        $this->countThing = $countThing;
    }

    public function introducing()
    {
        return "Today we are going to show you " . $this->countThing . " magic tools" . "<br>";
    }

    public function knowTools($tool1, $tool2, $tool3)
    {
        $this->tool1 = $tool1;
        $this->tool2 = $tool2;
        $this->tool3 = $tool3;
    }

    public function displayInfo()
    {
        echo "They are " . $this->tool1 . "," . $this->tool2 . " and " . $this->tool3 ." respectively.". "<br>" . "<br>";
    }
}

$a1 = new Technology("Azizbek", "guest", "15");
echo $a1->welcoming("Digit2024");
echo $a1->getThing("3");
echo $a1->introducing();
echo $a1->knowTools("Phone", "TV", "Laptop");
echo $a1->displayInfo();


//////////////////// Tecknology Class ends///////////////////

//////////////////// Phone Class begins///////////////////

class Phone extends Technology
{
    public $product;
    public $author1;
    public $author2;
    public $author3;
    public $count;

    public function setProduct($product)
    {
        $this->product = $product;
    }

    public function firstProduct()
    {
        echo "Here is the our first product is " . $this->product . "<br>";
    }

    public function setAuthors($count, $author1, $author2, $author3)
    {
        $this->count = $count;
        $this->author1 = $author1;
        $this->author2 = $author2;
        $this->author3 = $author3;
    }


    public function first()
    {
        echo "In the  " . $this->product . " category we have " . $this->count . " brands. Param-param they are: " . $this->author1 . "," . $this->author2 . " and " . $this->author3 . "<br>";
    }
}

$b1 = new Phone("Azizbek", "guest", "15");
$b1->setProduct("Mobile Phones");
echo $b1->firstProduct();
$b1->setAuthors("3", "Apple", "Nokia", "Samsung.");
echo $b1->first() . "<br>" . "<br>";

//////////////////// Phone Class ends///////////////////


//////////////////// Tv Class begins///////////////////

class Tv extends Technology
{

    public $product;
    public $author1;
    public $author2;
    public $author3;
    public $count;

    public function setProduct($product)
    {
        $this->product = $product;
    }

    public function firstProduct()
    {
        echo "Here is the our second product is " . $this->product . "<br>";
    }

    public function setAuthors($count, $author1, $author2, $author3)
    {
        $this->count = $count;
        $this->author1 = $author1;
        $this->author2 = $author2;
        $this->author3 = $author3;
    }


    public function first()
    {
        echo "In the  " . $this->product . " category we have " . $this->count . " brands. Param-param they are: " . $this->author1 . "," . $this->author2 . " and " . $this->author3 . "<br>";
    }

}

$tv = new Tv("Azizbek", "guest", "15");
$tv->setProduct("Televisions");
echo $tv->firstProduct();
$tv->setAuthors("3", "LG", "Artel", "TCL.");
echo $tv->first() . "<br>" . "<br>";

//////////////////// Tv Class ends///////////////////


//////////////////// Laptop Class begins///////////////////

class Laptop extends Technology
{

    public $product;
    public $author1;
    public $author2;
    public $author3;
    public $count;

    public function setProduct($product)
    {
        $this->product = $product;
    }

    public function firstProduct()
    {
        echo "Here is the our third product is " . $this->product . "<br>";
    }

    public function setAuthors($count, $author1, $author2, $author3)
    {
        $this->count = $count;
        $this->author1 = $author1;
        $this->author2 = $author2;
        $this->author3 = $author3;
    }


    public function first()
    {
        echo "In the  " . $this->product . " category we have " . $this->count . " brands. Param-param they are: " . $this->author1 . "," . $this->author2 . " and " . $this->author3 . "<br>";
    }

}

$d1 = new Laptop ("Azizbek", "guest", "15");
$d1->setProduct("Laptops");
echo $d1->firstProduct();
$d1->setAuthors("3", "Hp", "Lenovo", "Asus.");
echo $d1->first() . "<br>" . "<br>";

//////////////////// Laptop Class ends///////////////////
