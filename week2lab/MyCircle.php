<?php

/*$odd="Odd Numbers Are : ";
echo $odd;
echo "<br>";
for ($i=11; $i<=99; $i+=2)
	
{
  	  
echo $i." , "."<br>" ;
	   
} 
 
?>*/


/*class Fruit  {
    
    public $name;
    public $color;
    
    function __construct ($name) {
        
        $this -> name = =$name;
        
    }
    
    function get_name()  {
        
        return $this -> name;
    
    }
    
}

$apple = new Fruit("Apple");

echo $apple -> get_name();
?> */




<?php 
class MyCircle {
   public $radius;
 
   function __construct($name){
       
       $this->name = $name;
       
       
   }
    
    function getRadious() {
        return $this->radius;
    }
    function setRadius($radius){
                return $this->radius=radius;

    }
    
    function getArea(){
        
        return "area is = ".$this->radius*2*3.14;
    }
    $radius = new myCycle("Apple");
    echo $radius->getarea();
    ?>
    
    
    
    
    
    
    
    
    
    
    