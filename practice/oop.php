<?php 
/**
 * Entity is being represented by Class
 * Information
 *  Data Attributes
 * Functionality
 *  Methods
 * 
 * Entity: Car
 *      Attributes
 *          Seat Capacity
 *          Color
 *          Engine Size
 *      Functionality
 *          Runs
 *          Apply break
 *          Carry
 *          Transport
 * 
 * Class => It's a blueprint of an entity
 * Object
 * => An instrument of a class
 * 
 * Without object we cannot manipulate the class
 * 
 * Inheritance
 * Encapsulation
 * Polymorphism
 * Abstraction
 */

// this is an example of class
 class Car {
    // variables
    // function
    function getCar(){
        echo "The car has started.";
    }
    function returnCar($name){
        return "The name of the car is: ".$name;
    }
 }
// this is an example of object
 $car = new Car();
 
 // -> is object pointer
 $car->getCar();

 $output = $car->returnCar("Test");
 echo $output;
 
 

