<?php
    // echo date('d'); //day
    // echo date('m'); //month
    // echo date('y'); //year
    // echo date('l'); //Day of the week

    // echo date('Y/M/D'); 
    // echo date('M/D/Y');

    // echo date('h');     // hour
    // echo date('i');     // minute
    // echo date('s');     // second
    // echo date('a');     // pm or am

    // Set time zone 
    date_default_timezone_set('America/New_York');

    // echo date('h:i:sa');

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);

    // echo $timestamp;
    // echo date('m/d/Y h:i:sa', $timestamp); 

    $timestamp2 = strtotime('7:00pm March 22 2106');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Months');
    // echo  $timestamp2;
    
    echo date('m/d/Y h:i:sa', $timestamp5);
?>