<?php
    $msg = '';
    $msgClass = '';
    if(filter_has_var(INPUT_POST, 'submit')){
        // echo 'Submitted';
        // GET form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        
        //Check required fields
        if(!empty($email) && !empty($name) && !empty($message)){
            //passed
            // echo 'PASSED';
            //Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false ){
                // Failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else{
                // Passed
                // echo 'Passed';
                $toEmail = 'support@traversy.com';
                $subject = 'Contact Request From '.$name;
                $body = '<h2>Contact Reuest</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>
                ';

                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

                $headers .= "From: " .$name. "<".$email.">". "\r\n";
                if(mail($toEmail, $subject, $body, $headers)){
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-sucsess';
                }else{
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }
            }
        }else{
            //Failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">My Website</a>
            </div>
        </div>
    </nav>
    <div class = "container">
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?> <?php echo $msg; ?>">
            </div>
        <?php endif;?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div> 
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '';  ?>">
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea type="text" name="mesage" class="form-control" value="<?php echo isset($_POST['message']) ? $message : '';  ?>"></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    
    </div>
</body>
</html>