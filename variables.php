<?php
    //single comment
    #single line comment
    /*
        Multiple comment
    */
    /*
        - prefix $
        - strat with letter or underscore
        - Only leter , number or underscore
        - case sensitive
    */
    /*
        - string
        - number= integer
        - boolean
        - float
    */

    $output = 'Hello World!';
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $concaete = $string1 . ' ' . $string2 .'!';
    $greeting = "$string1 $string2";
    $string3 = 'They\'re here';


    $float1 = 4.4;
    $bool1 = true;
    
    define('GREETING', 'Hello everyone!', true);
    
    echo greeting;
?>