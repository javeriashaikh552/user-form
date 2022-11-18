<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container ">

    <form action="#" method="POST">

    
<label >EMAIL</label>
<input type="email" placeholder="enter your email" name="email">

<br>
<br>
<label >PASSWORD</label>
<input type="password" placeholder="enter your password" name="pass">


<br>
<br>
<br>
<br>

<input type="submit" class="btn btn-primary">

    </form>
  
    </div>
</body>
</html>


<?php

// if(isset($_POST["submit"])){
//     session_start();

//     $conn = mysqli_connect("localhost", "root", "", "userforms"); 

   
// $email =$_POST['email'];
// $pass =$_POST['pass'];

// $query= "SELECT * FROM `user` where `email` ='$email' AND `pass`= '$pass'";

// $resutl = mysqli_query ($conn,$query);

// if(mysqli_num_rows($result))
// {
//     while($data =mysqli_fetch_assoc($result)){
//         $_SESSION["name"]=$data["name"];
//         // header("Location:index.php");
//     }
// }
// else{
//     echo "invalid email os password";
// }

// }

?>
<!-- <script>
    window.location.assign("index.php");
</script> -->


<?php



if (isset($_POST["submit"])) {
session_start();    



$conn = mysqli_connect("localhost","root","","userforms");



$email = $_POST["email"];
$pass = $_POST["pass"];

$query =   "SELECT * FROM `user` WHERE `email` = '$email' AND `pass` = '$pass'";



$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result))
{
    while($data  = mysqli_fetch_assoc($result)){
            $_SESSION["name"]  = $data["name"];
            header("Location: index.php");

    }
}else{
    echo "invalid email or password";
}   



}

?>