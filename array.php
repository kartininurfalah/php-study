<?php
    $people = ['falah', 'helmi', 'asyi', 'miki', 'cao', 'romi'];

    echo $people[1];
    var_dump($people);
    //Assosiative array
    $related = ['helmi'=>'falah', 'ashri'=>'miki'];
    echo $related['ashri'];

    print_r($related);
    //multi-dimension
    $cars = [
        ['Honda', 'x', 20, 30, 10],
        ['Toyota', 'y', 32, 34, 12],
        ['Suzuki', 'z', 23, 56,22]
    ];
    echo $cars[1][0];
    print_r($cars);

?> 