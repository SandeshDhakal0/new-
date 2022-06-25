<?php
    interface User{
        //cannot write variable
        //by default abstract
        function getHorn();
    }

    class Car implements Horn{ 
        function getHorn(){
            echo "Pi Pi";
        }

    }

    class MotorBike implements Horn{
        function getHorn(){
            echo "po po";
        }
    }
    $car = new Car;
    $car->getHorn();        //pi pi
    $bike = new MotoBike;
    $bike->getHorn();       //po po
