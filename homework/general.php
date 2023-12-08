
<?php




include "index.php";


//////////////////// Phones Class extends begins///////////////////


class Apple extends Phone
{
    public $function1;
    public $function2;
    public $function3;
    public $brand;
    public $model;
    public $location;
    public $name;

    public function Name($name)
    {
        echo "And now it's turn to ". $this->name=$name."<br>";
    }


    public function brand($brand)
    {
        $this->brand=$brand;  
    }


    public function Phone1($model,$location)
    {
        echo "Here is the ".$this->model=$model." from ".$this->brand." company.Which is located in ".$this->location=$location."<br>";
    }



    public function functions($function1,$function2,$function3)
    {
        $this->function1=$function1;
        $this->function2=$function2;
        $this->function3=$function3;
        
    }

    public function appleFun()
    {
        echo "It has got a lot of functions.They are: ".$this->function1.",".$this->function2." and ".$this->function3."<br>"."<br>"."<br>";
    }    

}

$apple = new Apple("Azizbek", "guest", "15");
$apple->Name("Apple");
echo $apple->Phone1("iPhone 15","America.");
$apple->functions("Using Face ID feature","Accessing the App Store","Charging with proprietary charger.");
echo $apple->appleFun();




class Nokia extends Phone
{

    public $function1;
    public $function2;
    public $function3;
    public $brand;
    public $model;
    public $location;

    public $name;

    public function Name($name)
    {
        echo "And now it's turn to ". $this->name=$name."<br>";
    }


    public function brand($brand)
    {
        $this->brand=$brand;  
    }


    public function Phone1($model,$location)
    {
        echo "Here is the ".$this->model=$model." from ".$this->brand." company.Which is located in ".$this->location=$location."<br>";
    }



    public function functions($function1,$function2,$function3)
    {
        $this->function1=$function1;
        $this->function2=$function2;
        $this->function3=$function3;
        
    }

    public function nokiaFun()
    {
        echo "It has got a lot of functions.They are: ".$this->function1.",".$this->function2." and ".$this->function3."<br>"."<br>"."<br>";
    }    

}

$nokia = new Nokia("Azizbek", "guest", "15");
$nokia->Name("Nokia");
$nokia->brand("Nokia");
echo $nokia->Phone1("Nokia S23","Uzbekistan.");
$nokia->functions("Playing the classic Snake game","Known for its durable build quality","Long battery life.");
echo $nokia->nokiaFun();



class Samsung extends Phone
{

    public $function1;
    public $function2;
    public $function3;
    public $brand;
    public $model;
    public $location;

    public $name;

    public function Name($name)
    {
        echo "And now it's turn to ". $this->name=$name."<br>";
    }


    public function brand($brand)
    {
        $this->brand=$brand;  
    }


    public function Phone1($model,$location)
    {
        echo "Here is the ".$this->model=$model." from ".$this->brand." company.Which is located in ".$this->location=$location."<br>";
    }



    public function functions($function1,$function2,$function3)
    {
        $this->function1=$function1;
        $this->function2=$function2;
        $this->function3=$function3;
        
    }

    public function samsungFun()
    {
        echo "It has got a lot of functions.They are: ".$this->function1.",".$this->function2." and ".$this->function3."<br>"."<br>"."<br>";
    }    

}

$samsung = new Samsung("Azizbek", "guest", "15");
$samsung->Name("Samsung");
$samsung->brand("Samsung");
echo $samsung->Phone1("Samsung S23","Korea.");
$samsung->functions("Utilizing edge display technology","Featuring a multi-camera system","Supporting wireless charging.");
echo $samsung->samsungFun(). "<br>". "<br>". "<br>";


//////////////////// Phones Class extends ends///////////////////


//////////////////// Tv Class extends begins///////////////////


class Lg extends Tv
{

    public $function1;
    public $function2;
    public $function3;
    public $brand;
    public $model;
    public $location;

    public $name;

    public function Name($name)
    {
        echo "And now it's turn to ". $this->name=$name."<br>";
    }


    public function brand($brand)
    {
        $this->brand=$brand;  
    }


    public function Phone1($model,$location)
    {
        echo "Here is the ".$this->model=$model." from ".$this->brand." company.Which is located in ".$this->location=$location."<br>";
    }



    public function functions($function1,$function2,$function3)
    {
        $this->function1=$function1;
        $this->function2=$function2;
        $this->function3=$function3;
        
    }

    public function lgFun()
    {
        echo "It has got a lot of functions.They are: ".$this->function1.",".$this->function2." and ".$this->function3."<br>"."<br>"."<br>";
    }    

}

$lg = new Lg("Azizbek", "guest", "15");
$lg->Name("LG");
$lg->brand("LG");
echo $lg->Phone1("LG S23","China.");
$lg->functions("Accessing smart TV features","Featuring OLED display technology","Controlling with the Magic Remote.");
echo $lg->lgFun(). "<br>";





class Artel extends Tv
{

    public $function1;
    public $function2;
    public $function3;
    public $brand;
    public $model;
    public $location;

    public $name;

    public function Name($name)
    {
        echo "And now it's turn to ". $this->name=$name."<br>";
    }


    public function brand($brand)
    {
        $this->brand=$brand;  
    }


    public function Phone1($model,$location)
    {
        echo "Here is the ".$this->model=$model." from ".$this->brand." company.Which is located in ".$this->location=$location."<br>";
    }



    public function functions($function1,$function2,$function3)
    {
        $this->function1=$function1;
        $this->function2=$function2;
        $this->function3=$function3;
        
    }

    public function artelfun()
    {
        echo "It has got a lot of functions.They are: ".$this->function1.",".$this->function2." and ".$this->function3."<br>"."<br>"."<br>";
    }    

}

$artel = new Artel("Azizbek", "guest", "15");
$artel->Name("Artel");
$artel->brand("Artel");
echo $artel->Phone1("Artel boost","Uzbekistan.");
$artel->functions("Energy-efficient TV model","Offering an affordable price point","Displaying vivid colors.");
echo $artel->artelfun(). "<br>";


class TCL extends Tv
{
    public $function1;
    public $function2;
    public $function3;
    public $brand;
    public $model;
    public $location;

    public $name;

    public function Name($name)
    {
        echo "And now it's turn to ". $this->name=$name."<br>";
    }


    public function brand($brand)
    {
        $this->brand=$brand;  
    }


    public function Phone1($model,$location)
    {
        echo "Here is the ".$this->model=$model." from ".$this->brand." company.Which is located in ".$this->location=$location."<br>";
    }



    public function functions($function1,$function2,$function3)
    {
        $this->function1=$function1;
        $this->function2=$function2;
        $this->function3=$function3;
        
    }

    public function tclFun()
    {
        echo "It has got a lot of functions.They are: ".$this->function1.",".$this->function2." and ".$this->function3."<br>"."<br>"."<br>";
    }    
    
}

$tcl = new TCL("Azizbek", "guest", "15");
$tcl->Name("TCL");
$tcl->brand("TCL");
echo $tcl->Phone1("TCL","Germany.");
$tcl->functions("Using the Roku TV interface","Supporting 4K UHD resolution","Featuring a sleek and modern design.");
echo $tcl->tclfun(). "<br>". "<br>". "<br>";



//////////////////// Tv Class extends ends///////////////////



//////////////////// Laptop Class extends begins///////////////////




class Hp extends Laptop
{
    public $function1;
    public $function2;
    public $function3;
    public $brand;
    public $model;
    public $location;

    public $name;

    public function Name($name)
    {
        echo "And now it's turn to ". $this->name=$name."<br>";
    }


    public function brand($brand)
    {
        $this->brand=$brand;  
    }


    public function Phone1($model,$location)
    {
        echo "Here is the ".$this->model=$model." from ".$this->brand." company.Which is located in ".$this->location=$location."<br>";
    }



    public function functions($function1,$function2,$function3)
    {
        $this->function1=$function1;
        $this->function2=$function2;
        $this->function3=$function3;
        
    }

    public function hpFun()
    {
        echo "It has got a lot of functions.They are: ".$this->function1.",".$this->function2." and ".$this->function3."<br>"."<br>"."<br>";
    }    
    
    
}

$hp = new Hp("Azizbek", "guest", "15");
$hp->Name("Hp");
$hp->brand("Hp");
echo $hp->Phone1("Hp","Italy.");
$hp->functions("Running on Windows operating system","Featuring a sleek and modern design","Known for reliable performance.");
echo $hp->hpfun(). "<br>";




class Lenovo extends Laptop
{

    public $function1;
    public $function2;
    public $function3;
    public $brand;
    public $model;
    public $location;

    public $name;

    public function Name($name)
    {
        echo "And now it's turn to ". $this->name=$name."<br>";
    }


    public function brand($brand)
    {
        $this->brand=$brand;  
    }


    public function Phone1($model,$location)
    {
        echo "Here is the ".$this->model=$model." from ".$this->brand." company.Which is located in ".$this->location=$location."<br>";
    }



    public function functions($function1,$function2,$function3)
    {
        $this->function1=$function1;
        $this->function2=$function2;
        $this->function3=$function3;
        
    }

    public function lenovoFun()
    {
        echo "It has got a lot of functions.They are: ".$this->function1.",".$this->function2." and ".$this->function3."<br>"."<br>"."<br>";
    }    
    
}

$lenovo = new Lenovo("Azizbek", "guest", "15");
$lenovo->Name("Lenovo");
$lenovo->brand("Lenovo");
echo $lenovo->Phone1("Lenovo","France.");
$lenovo->functions("Part of the ThinkPad series","Convertible into a tablet with Yoga design","Featuring the legendary ThinkPad keyboard.");
echo $lenovo->lenovofun(). "<br>";




class Asus extends Laptop
{
    public $function1;
    public $function2;
    public $function3;
    public $brand;
    public $model;
    public $location;

    public $name;

    public function Name($name)
    {
        echo "And now it's turn to ". $this->name=$name."<br>";
    }


    public function brand($brand)
    {
        $this->brand=$brand;  
    }


    public function Phone1($model,$location)
    {
        echo "Here is the ".$this->model=$model." from ".$this->brand." company.Which is located in ".$this->location=$location."<br>";
    }



    public function functions($function1,$function2,$function3)
    {
        $this->function1=$function1;
        $this->function2=$function2;
        $this->function3=$function3;
        
    }

    public function asusFun()
    {
        echo "It has got a lot of functions.They are: ".$this->function1.",".$this->function2." and ".$this->function3."<br>"."<br>"."<br>";
    }    
}

$asus = new Asus("Azizbek", "guest", "15");
$asus->Name("Asus");
$asus->brand("Asus");
echo $asus->Phone1("Asus","Turkey.");
$asus->functions("Designed for gaming performance","Featuring a lightweight and portable design","Long battery life for on-the-go use.");
echo $asus->asusfun(). "<br>";

//////////////////// Laptop Class extends ends///////////////////

?>
