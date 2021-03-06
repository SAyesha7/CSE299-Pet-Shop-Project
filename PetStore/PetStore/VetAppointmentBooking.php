<?php
include("config.php");
/*$sql= "INSERT INTO `vacappointment`(`ownername`, `email`, `petname`, `petspecies`, `vet`, `reason`, `number`) 
VALUES ('owner','email','petname','petType','vet','reason','number')";

if(mysqli_query($db, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}*/
try{
  $stmt = $db->prepare("INSERT INTO `vacappointment`(`ownername`, `email`, `petname`, `petspecies`, `vet`, `reason`, `number`) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param('ssssssi',$_POST['owner'],$_POST['email'],$_POST['petname'],$_POST['vet'],$_POST['petType'],$_POST['reason'],$_POST['number']);
         $stmt->execute();
          } catch (Exception $ex) { $error = $ex->getMessage(); }
 
?>
<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" type="text/css" href="salonregistration.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Vet Appointment Booking</title>
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
              <div class="col-md-5">
                <img src="slider-image-19345-orig-cropped.jpg" alt="Veterinary" width="500px" height="900px">
              </div>
              
              <div class="col-md-7">
                <div class="card-body">
                <div class= container-fluid>
        <h4 class="text-center">Veterinary Appointment Scheduling</h4>
      
<!-- <form action="#!">
            <div class="form-group">
                <form class="row g-2">                 
                  <div class="row g-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" name="Owner" >
                <label for="Owner">Owner's Name</label>
                
          </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" name="floatingInputGrid3" value="owner@email.com">
            <label for="floatingInputGrid3">Email address</label>
          </div>
        </div>
    </div>
    <br>
  
    <div class="row g-2">
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" name="floatingInputGrid1" >
            <label for="floatingInputGrid1">Pet Name</label>  
              </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
              <option selected>Select Your Pet Type</option>
              <option value="1">Cat</option>
              <option value="2">Dog</option>
              <option value="3">Rabbit</option>
              <option value="3">Hamster</option>
              <option value="4">Turtle</option>
              <option value="5">Bird</option>
              <option value="6">Other</option>
             
            </select>
            <label for="floatingSelectGrid">Pet Species</label>
          </div>
        </div>
    </div>
    <br>
    <div class="col-md">
        <div class="form-floating">
          <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
            <option selected>Select Vet to book an appointment with</option>
            <option value="1">Vet1</option>
            <option value="2">Vet2</option>
            <option value="3">Vet3</option>
          </select>
          <label for="floatingSelectGrid">Veterinarians Available</label>
        </div>
      </div>
  </div>
    <br>
              
          <h6 text-left>Reason for Appointment</h6>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Spay/Neuter
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckDefault">
              Deworming
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
    Vaccination
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckDefault">
    Caesarian Section
  </label>
</div>
          
       
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckDefault">
              Regular Check Up
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Surgery
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckDefault">
              Ultrasound
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckDefault">
              Other
            </label>
          </div>
          <br>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"><h6>Comments</h6></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div text-center>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </div> -->
          <form method="post">
   <label for="owner">Name</label>
  <input type="text" name="owner" required placeholder="Your name.."/>
  <label for="email">Email</label>
  <input type="text" name="email" required placeholder="Your email.."/>
  <label for="petname">Pet Name</label>
  <input type="text" name="petname" required placeholder="Your petname.."/>
  <label for="petType">Pet Type</label>
  <input type="text" name="petType" required placeholder="Your pettype.."/>
  <label for="vet">Vet</label>
  <input type="text" name="vet" required placeholder="Your vet.."/>
  <label for="reason">Reason</label>
  <input type="text" name="reason" required placeholder="Your reason.."/>
  <label for="comments">Comments</label>
  <input type="text" name="comments" required placeholder="Your pettype.."/>
  <label for="number">Number</label>
  <input type="text" name="number" required placeholder="Your number.."/>


 



  <input type="submit" value="Register" class="btn btn-primary"/>

</form>
      </div>  
    </div>
  </div>
  </div>
</div>
  
 
  <br><br> 
      <footer class="bg-dark py=6" width = "6000px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-2"></div>
          <div class="col-lg-2 col-md-2 text-center">
           <br> 
          <h5 class="text-warning">Smart PetCare</h6>
          <p class="text-light"> Our company is a one-place solution to all pet-related problem. It offers a wide variety of pet products from foods to accessories as well as pharmacy, veterinarian and grooming services.</p>
          </div>
        <div class="col-lg-3 col-md-1">
          <br> 
          <h5 class="text-warning py=3">Contact Us</h6>
          <p class="text-light py=3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            Dhaka, Bangladesh
          </p>
          <p class="text-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            smart@petcare.com
          </p>
          <p class="text-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            sadia@gmail.com
          </p>
          <p class="text-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
           anjan@gmail.com
          </p>
          <p class="text-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            +01332738886
          </p>
        </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
      <hr class=" text-light">
        <p class="text-center text-light mb-3">&copy; Copyrights 2021| All rights reserved by Smart PetCare</p>
        <br>
      </footer>
    
      
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