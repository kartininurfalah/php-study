<?php
    
    if(isset( $_GET['name'])){
        // print_r($_GET);
        $name = htmlentities($_GET['name']);
        echo $name;
    }
    /*
    if(isset( $_POST['name'])){
        print_r($_POST);
        $name = htmlentities($_POST['name']);
        echo $name;
    }
    
    if(isset( $_REQUEST['name'])){
        // print_r($_REQUEST);
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    }
    echo $_SERVER['QUERY_STRING'];
     */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
</head>
<body>
    <div class="container">
        <form method="GET" action="get_post.php" class ="container">
            <div>
                <label for="nama">Nama</label><br>
                <input type="text" name = "name">
            </div>
            <div>
                <label for="email">Email</label><br>
                <input type="text" name="email" id="">
            </div>
            <input type="submit" value="Submit">
        </form>
        <ul>
            <li>
                <a href="get_post.php?name=Falah">Falah</a>
            </li>
            <li>
                <a href="get_post.php?name=Satria">Satria</a>
            </li>
        </ul>
        <h1>
            <?php echo "{$name}'s Profile"; ?> 
        </h1>
        </div>
</body>
</html>