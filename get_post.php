<?php
    if(isset( $_GET['name'])){
        echo $_GET['name'];
    }
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
    </div>
</body>
</html>