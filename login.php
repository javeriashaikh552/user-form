

<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- <link rel="stylesheet" type="text/css" href="./style.css"> -->
<title>Hello, world login form!</title>
</head>
<body  style=" background-image: url(https://images.pexels.com/photos/14531185/pexels-photo-14531185.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);" width="100%">
  <!-- <header>
  <img src="https://www.pexels.com/photo/wooden-footpath-in-park-14082768/"  width="50%" alt="">
  </header> -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Link</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Dropdown
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
</li>
</ul>
<form class="form-inline my-2 my-lg-0">
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>
<br>
<br><br>


<!-- <div class="rr">
    
    <p>Lorem ipsum dolor sit amet consectetur 
    <br>adipisicing elit. Sequi 
   similique porro officia 
    <br> voluptas quod hic esse provident suscipit 
    <br>  tempora necessitatibus earum quas  <br>quos cumque inventore, 
    <br>sunt rerum perspiciatis, voluptatem dolor.</p>
</div> -->


   <div class="div">
  
   <div class="container" style="width:50%;height:160%;">
    <!-- Content here -->
    <h1 style="color:white; justify-content: center;">Login Form</h1>
    <form action="#" method="POST" style=" top: 70%; ">
    <input style= "width:70%; height:20%;color:blue;" type="text" placeholder="Enter Your Name" name="email">
    <br>
    <br>

<input style= "width:70%; height:20%;color:blue;" type="email" placeholder="Enter Your Email" name="email">

<br><br>
<input style= "width:70%; height:20%;color:blue;" type="password" placeholder="Enter Your Password" name="pass">

<br>
<br>
<input type="submit" name="submit" class="btn btn-primary" >

</form>
    
    
    </div>
  
   </div>



<?php



if (isset($_POST["submit"])) {
session_start();    

$conn = mysqli_connect("localhost","root","","userforms");


$email = $_POST["email"];
$pass = $_POST["pass"];

$query =   "SELECT * FROM `user` WHERE  `email`='$email' AND `pass`='$pass'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result))
{
    while($data  = mysqli_fetch_assoc($result)){
            $_SESSION["name"]  = $data["name"];
            header("location: index.php");

    }
}
else{
    echo "invalid email or password";
}   



}

?>


<!-- <script>
    window.location.assign("index.php");
</script>  -->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>