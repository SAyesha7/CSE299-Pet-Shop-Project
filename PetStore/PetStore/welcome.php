<?php
   include('session.php');
?>
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Added Homepage</title>
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
                  <li><a class="dropdown-item" href="CatDryFood.html">Dry Food</a></li>
                  <li><a class="dropdown-item" href="CatWetFood.html">Wet Food</a></li>
                  <li><a class="dropdown-item" href="Mother-Kitten_Care.html">Mother and Kitten Care</a></li>
                  <li><a class="dropdown-item" href="CatTreats.html">Treats</a></li>
                  <li><a class="dropdown-item" href="CatToys.html">Toys</a></li>
                  <li><a class="dropdown-item" href="CatGroomingSupplies.html">Grooming Supplies</a></li>
                  <li><a class="dropdown-item" href="CatAccessories.html">Accessories</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dog
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="DogDryFood.html">Dry Food</a></li>
                  <li><a class="dropdown-item" href="DogWetFood.html">Wet Food</a></li>
                  <li><a class="dropdown-item" href="Mother and puppy care.html">Mother and Puppy Care</a></li>
                  <li><a class="dropdown-item" href="DogTreats.html">Treats</a></li>
                  <li><a class="dropdown-item" href="DogToys.html">Toys</a></li>
                  <li><a class="dropdown-item" href="DogGroomingSupplies.html">Grooming Supplies</a></li>
                  <li><a class="dropdown-item" href="DogAccessories.html">Accessories</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Bird
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="BirdFood.html">Food</a></li>
                  <li><a class="dropdown-item" href="BirdCage.html">Cages</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Fish and Reptile
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="FishFood.html">Fish Food</a></li>
                  <li><a class="dropdown-item" href="TurtleFood.html">Turtle Food</a></li>
                  <li><a class="dropdown-item" href="FishAquarium.html">Aquarium</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Bunny and Hamster
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="RabbitFood.html">Food</a></li>
                  <li><a class="dropdown-item" href="Rabbit-HansterCages.html">Cages and Carriers</a></li>
                  <li><a class="dropdown-item" href="Rabbit-HansterAccessories.html">Accessories</a></li>
              </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">My Account</a>
        </li> 
            </ul>
   
              <h5 style="color:white">Welcome <?php echo $login_session; ?>,    </h5>
                <button class="btn btn-primary" type="button"><a href = "logout.php"><p style="color:white">Sign Out<p></a></button>
        
          </div>
        </div>
      </nav>
      
      

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="cat-dog-rabbit-hamster-together-full-growth-white-background-cat-dog-rabbit-hamster-158957165.jpg" class="d-block w-100 h-50">
          </div>
          <div class="carousel-item">
            <img src="puppy-kitten-vet.jpg" class="d-block w-100 h-50">
          </div>
          <div class="carousel-item">
            <img src="istockphoto-860172898-612x612.jpg" class="d-block w-100 h-50">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <br>
        <br>
        
        <div class="container" style=background-color:#fcf2e9>
          <h3 class="text-center py-3">About Us</h3>  
        <p class="text-left bg-white-50">Smart Pet Care??is a well-renowned online store that??features??a variety of high-quality and affordable products such as food, accessories, and necessary supplies for your lovely pets. Our veterinarians offer exceptional, compassionate care with superior client service. Trust the experts at our website with your beloved pet. We have a highly trained and qualified staff of board certified specialists and veterinarians to treat your animals as well as pharmacy services for emergency situations. Specialists in surgery, orthopedic surgery, internal medicine, sports medicine, cardiology and pain management are available by appointment. We also offer grooming services for your pets. Our passion for excellence has driven us, and continues to drive us into the future. The team at Smart PetCare knows that every product counts for your precious pets, and strives to make the entire experience as rewarding and fun as possible.??</p>     

      <div class="row">
        
          <div class="col-lg-3">
            <i class="fas fa-stethoscope bg-danger text-white rounded-circle fa-2x p-2 mb-3"></i>
            <h5>Pet Veterinary</h5>
            <p>Book Appointments with the best doctors to receive the best treatment for your pets.</p>
          </div>
          <div class="col-lg-3">
            <i class="fas fa-cut bg-primary text-white rounded-circle fa-2x p-2 mb-3"></i>
            <h5>Pet Salon</h5>
            <p>Book for cleaning, and grooming services for your pets, or give your pets a new makeover.</p>
          </div>
          <div class="col-lg-3">
            <i class="fas fa-syringe bg-warning text-white rounded-circle fa-2x p-2 mb-3"></i>
            <h5>Pet Pharmacy</h5>
            <p>Hospital Equipments along with all required pet emergency equipments and medicines.</p>
          </div>
          <div class="col-lg-3">
            <i class="fas fa-cart-plus bg-success text-white rounded-circle fa-2x p-2 mb-3"></i>
            <h5>Pet Products</h5>
            <p>Shop for a wide-variety of high-quality and affordable products for your beloved pets.</p>
          </div>
        
      </div>
    </div>
<br>
<br>
<h3 class="text-center"><small class="text-dark"></small>Available Services</small></h3>
<br>
      </div>
      <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
          <div class="card border-secondary text-white bg-dark mb-3 h-100">
            <img src="Capture.PNG" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Veterinary Appointment</h5>
              <p class="card-text">Open from 9AM - 8PM</p>
              <a href="VetAppointmentBooking.php" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-secondary text-white bg-dark mb-3 h-100">
            <img src="Capture2.PNG" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Pet Salon</h5>
              <p class="card-text">Open from 9AM - 8PM.</p>
              <a href="PetSalon.php" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-secondary text-white bg-dark mb-3 h-100">
            <img src="Capture3.PNG" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Pet Pharmacy</h5>
              <p class="card-text">Open from 9AM - 8PM</p>
              <a href="Pharmacy.html" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <footer class="bg-dark py=6">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-2"></div>
        <div class="col-lg-2 col-md-2 text-center">
         <br> 
        <h5 class="text-warning">Smart PetCare</h6>
        <p class="text-light"> Our company is a one-place solution to all pet-related problem. It offers a wide variety of pet products from foods to accessories as well as pharmacy, veterinarian and grooming services.</p>
        </div>
      <div class="col-lg-3 col-md-1">
        <br> 
        <h5 class="text-warning pb=4">Contact Us</h6>
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
      <p class="text-center text-light mb-3">?? Copyrights 2021| All rights reserved</p>
      <br>
    </footer>
        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  </body>
</html>