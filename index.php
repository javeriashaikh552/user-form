<?php
     session_start();
       if($_SESSION["name"]){
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
</head>
<body>
<h1>Welcome to Dashboard <?php echo $_SESSION["name"]?></h1>
</body>
</html>

<?php
}
else{
    header("Location: login.php");
}

?>