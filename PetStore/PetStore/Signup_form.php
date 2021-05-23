<?php
   include("config.php");
   
   if (isset($_POST['name'])) {
      try {
        $stmt = $db->prepare("INSERT INTO `user` (`name`, `password`, `email`, `phone`, `gender`)  VALUES (?,?,?,?,?)");
       $stmt->bind_param('sssis',$_POST['name'],$_POST['password'],$_POST['email'],$_POST['phonenumber'],$_POST['gender']);
        $stmt->execute();

      } catch (Exception $ex) { $error = $ex->getMessage(); }

  }
 
?>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<title>Register</title>
<style>
           label {  color: black; font-weight: bold; width: 150px;  float: left;} 


input[type=text] {
  width: 80%;
   padding: 10px 40px;
   margin: 8px 0;
   box-sizing: border-box;
   background-color: #ffffff;
   color: white;
   resize: none;
   border: 2px solid rgb(5, 5, 5);
   border-radius: 4px;
   resize: vertical

      }
      body {
      box-sizing: border-box;
      text-align: center;
      background-color: #e6ffff;}
  
      h3{
  color: #0000CD;
}
input[type=button], input[type=submit] {
background-color: #5900b3;
border: round;
color: white;
padding: 16px 16px;
text-decoration: none;
margin: 20px 2px;
cursor: pointer;
display: inline-block;
}
.container {
border-radius: 25px;
background-color: #f2f2f2;
padding: 20px;
}


.card-footer {
  display: flex;
  flex-direction: column;
}

button.btn {
  margin-top: auto;

  
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Smart PetCare</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cat
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Dry Food</a></li>
                    <li><a class="dropdown-item" href="#">Wet Food</a></li>
                    <li><a class="dropdown-item" href="#">Mother and Kitten Care</a></li>
                    <li><a class="dropdown-item" href="#">Treats</a></li>
                    <li><a class="dropdown-item" href="#">Toys</a></li>
                    <li><a class="dropdown-item" href="#">Grooming Supplies</a></li>
                    <li><a class="dropdown-item" href="#">Accessories</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dog
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Dry Food</a></li>
                    <li><a class="dropdown-item" href="#">Wet Food</a></li>
                    <li><a class="dropdown-item" href="#">Mother and Puppy Care</a></li>
                    <li><a class="dropdown-item" href="#">Treats</a></li>
                    <li><a class="dropdown-item" href="#">Toys</a></li>
                    <li><a class="dropdown-item" href="#">Grooming Supplies</a></li>
                    <li><a class="dropdown-item" href="#">Accessories</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Bird
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Food</a></li>
                    <li><a class="dropdown-item" href="#">Cages</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Fish and Reptile
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Fish Food</a></li>
                    <li><a class="dropdown-item" href="#">Turtle Food</a></li>
                    <li><a class="dropdown-item" href="#">Aquarium</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Bunny and Hamster
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Food</a></li>
                    <li><a class="dropdown-item" href="#">Cages and Carriers</a></li>
                    <li><a class="dropdown-item" href="#">Accessories</a></li>
                </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">My Account</a>
        </li> 
            </ul>
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">Login</button>
                <button class="btn btn-primary" type="button">SignUp</button>
              </div>
          </div>
        </div>
      </nav>
      <br>
      <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card">
        <div class="row">
          <div class="col-md-9">
            <img src="facade-pets-zoo-store-concept-animals-shop-best-supplies-people-shopping-toy-feed-banner-theme-petshop-female-217208862.jpg" alt="" width="750px" height="550px">
          </div>
          
          <div class="col-md-3">
          <br><h3>Smart PetCare</h3><br>        

<form method="post">
   <label for="name">Name</label>
  <input type="text" name="name" required placeholder="Your name.."/>
  <label for="password">Password</label>
  <input type="text" name="password" required placeholder="Your password.."/>
  <label for="email">Email</label>
  <input type="text" name="email" required placeholder="Your Email.."/>
  <label for="phonenumber">Contact</label>
  <input type="text" name="phonenumber" required placeholder="Your Phonenumber.."/>
 
 

  <label for="gender">Gender</label>
  <select id="gender" type="text" name="gender">
  <option value="female">Female</option>
  <option value="male">Male</option>
      <br>



  <input type="submit" value="Register"/>

  <input class="button" type="button" value="Back To Login" onclick="document.location='login.php'"/>
  <br>
</form>
</div></div></div></div>

   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>

