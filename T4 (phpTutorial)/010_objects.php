<?php
class Car{
 

    public function __construct($name, $year){
        $this->name = $name;
        $this->year = $year;
    	}

    public function print_details(){
    	echo "This car is a ".$this->year ." ".$this->name.".\n";
    }

}

$car = new Car("Toyota", 2006);
$car->print_details();