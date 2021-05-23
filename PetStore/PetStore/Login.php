<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT name FROM user  WHERE name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql) or die("Error: ".mysqli_error($db)); 


      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("Location: http://localhost/PetStore/welcome.php");
      }
      else {
        echo "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      
          <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!--<link rel="stylesheet" type="text/css" href="mysinguostyle.css">-->
<title>Login</title>
      <style>
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
            background-color:#fff7e6;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
         label { color: black; font-weight: bold; width: 150px;  float: left; } 
h3{
  color: #0000CD;
}
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
      input[type=password] {
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
      </style>

   </head>
   
   <body bgcolor = "#FFFFFF">
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
      </nav><br>
      <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card">
        <div class="row">
          <div class="col-md-9">
            <img src="pet-veterinary-clinic-vector-illustration-cartoon-flat-tiny-veterinarian-people-check-doctor-care-animal-hospital-character-vet-178065460.jpg" alt="" width="800px" height="550px">
          </div>
          
          <div class="col-md-3">
            
               <br><br><br><br><br><h3>Smart PetCare</h3><br>
               <form action = "" method = "post">
                  <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = "Login" class="btn btn-primary"/><br />
               </form>
               <br>
               <h6>Don't have an account?<br><a href = "Signup_form.php">Sign Up</a></h6>
               
            
            
         </div>
         
      </div>

      
       </div>
</div>
</div>
<br><br> 
   </body>

</html>