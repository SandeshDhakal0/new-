<?php
    trait Functions{
        function debut($data){
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }
    }

    class User{
        use Functions;
    }
    class Person{
        use Functions;
    }