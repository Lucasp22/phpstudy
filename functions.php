<?php

    #Function
    /*
    - Camel Case - myFunction()
    - Lower case - my_function()
    - Pascal Case - MyFunction() =for class

    */
      //SimpleFx
    function simpleFunction(){
      echo 'Hello Lucas';
    }
    simpleFunction();

    // Fx with Param
    function sayHello($name = 'Gold Coast'){
      echo "Hello $name <br>";
    }
    // sayHello('Lucas');
    // sayHello();

    // #Return
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }
    // echo addNumbers(2,4);

    #By Reference

    $myNum = 10;

    function addFive($num){
      $num += 5;
    }
    function addTen($num){
      $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum<br>";

    addTen($myNum);
    echo "Value: $myNum<br>";






 ?>
