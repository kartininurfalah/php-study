<?php
    //LOOPS - execute code set number of timeout
    /*
        for
        while do
        do..while
        foreach
    */
    # for loop
    //@params - init, condition, inc
    for ($i = 0 ; $i < 10; $i++){
        echo 'Number '.$i;
        echo '<br>';
    }

    # while do
    # @params - condition
    $i = 0;
    while($i<10){
        echo $i;
        echo '<br>';
        $i++;
    }
?>