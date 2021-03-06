<?php
    # Function - block of code that can be repeatedly called
    /*
        Camel Case - myFunction()
        Lower case - my_function()
        Pascal Case - MyFunction()
    */
    //create simple function
    function simpleFunction(){
        echo 'Hello World!';
    }
    // run simple function
    // simpleFunction();

    //function with params
    function sayHello($name = 'World'){
        echo "Hello $name<br>";
    }
    // sayHello('Helmi');
    // sayHello('Falah');
    // sayHello('tony');

    function addNumber($num1, $num2){
        echo $num1 + $num2;
    }

    // addNumber(2,5);

    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }
    function addSeven(&$num){
        $num += 7;
    }
    function addTwo(&$num){
        $num += 2;
    }

    addFive($myNum);
    echo "Value: $myNum<br>";

    addTen($myNum);
    echo "Value: $myNum<br>";

    addTwo($myNum);
    echo "Value: $myNum<br>";
   
?>
