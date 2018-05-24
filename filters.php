<?php
    //Check for posted data
    // if(filter_has_var(INPUT_POST, 'data')){
    //     echo 'Data Found';
    // } else {
    //     echo 'No Data';
    // }
    /*
    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];
        //Remove illegal chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is Valid';
        } else{
            echo 'Email is NOT valid';
        }
    }
   
    $var = 23;
    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo $var. ' is a number ';
    } else {
        echo $var. ' is not a number';
    }
     
    $var = '33sebhrj345j3w4b3qb4ck2';
    var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
    
    $var = '<script>alert(1)</script>';
    // echo $var;
    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

    $filters = [
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => [
            "filter"=> FILTER_VALIDATE_INT,
            "option" => [
                "min_range" => 1,
                "max_range" => 100
            ]
        ]
    ];
    print_r(filter_input_array(INPUT_POST, $filters));
    */
    $arr = [
        "name" => "kartini nurfalah cantik",
        "age" => "20",
        "email" => "kartininurfalah@gmail.com"
    ];
    $filters = [
        "name" => [
            "filter" => FILTER_CALLBACK,
            "option" => "ucwords"
        ],
        "age" => [
            "filter" => FILTER_VALIDATE_INT,
            "option" => [
                "min_range" => 1,
                "max_range" => 120
            ]
        ],
        "email" => FILTER_VALIDATE_EMAIL
    ];
    print_r(filter_var_array($arr, $filters));
     
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>