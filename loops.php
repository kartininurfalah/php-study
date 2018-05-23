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
    // for ($i = 0 ; $i < 10; $i++){
    //     echo 'Number '.$i;
    //     echo '<br>';
    // };

    // # while do
    // # @params - condition
    // $i = 0;
    // while($i<10){
    //     echo $i;
    //     echo '<br>';
    //     $i++;
    // };

    # do while
    # @params - condition
    $i = 0;
    do{
        echo $i;
        echo '<br>';
        $i++;
    }
    while($i < 10);

    # foreach - loop for array
    $people = ['helmi' => 'satriahelmi@gmail.com', 'falah' => 'kartininurfalah@gmail.com', 'ashri' => 'ashrikhairunnisaus@gmail.com', 'miki' => 'ilhamkurnias@Gmail.com', 'romi' => 'romiutomo@gmail.com', 'cao' => 'annisao@gmail.com'];

    foreach($people as $person => $email){
        echo $person . ':'. $email;
        echo '<br>';
    }
?>