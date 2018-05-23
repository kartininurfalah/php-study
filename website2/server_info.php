<?php
    # $_SERVER SUPERGLOBAL

    //Create server array
    $server = [
        'Host Server Name ' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_  ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Sript Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT, FILENAME']
    ];
    // print_r($server);

    // $clinet = ;

    $client = [
        'Cliet Server Info' => $_SERVER['HTTP_USER_AGENT'],
        'Client Up' => $_SERVER['REMOTE_ADDR'],
        'Remote port' => $_SERVER['REMOT_PORT']
    ];
    // print_r($clinet);
 ?>