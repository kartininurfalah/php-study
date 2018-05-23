<?php
    # CONDITIONAL

    /*
        ==
        ===
        <
        >
        <=
        >=
        !=
        !==
    */

    // $num = 6;
    
    // if ($num == 5){
    //     echo '5 passed';
    // }elseif ($num == 6) {
    //     echo '6 is passed';
    // } 
    // else{
    //     echo 'did not passed';
    // }

    # NESTING IF

    $num = 6;
    // if ($num > 4){
    //     if ($num < 10){
    //         echo "$num passed";
    //     }
    // }

    /* 
        LOGICAL OPERATOR

        and &&
        or ||
        xor
    */
    
    // if ($num > 4 || $num < 10){
    //     echo "$num passed";
    // }
    # SWITCH

    $favColor = 'red';

    switch($favColor){
        case 'red':
            echo 'your favorite color is red';
            break;
        case 'blue':
            echo 'your favorite color is blue';
            break;
        case 'green':
            echo 'your favorite color is green';
            break;
       default:
            echo 'your favorite color is something else'; 
        
    }
?>