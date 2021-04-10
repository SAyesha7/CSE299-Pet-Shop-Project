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
<link rel="stylesheet" type="text/css" href="mysinguostyle.css">
<title>Register</title>

<body>

<div class="container">

<form method="post">
   <label for="name">Name</label>
  <input type="text" name="name" required placeholder="Your name.."/>
  <label for="password">Password</label>
  <input type="text" name="password" required placeholder="Your password.."/>
  <label for="email">Email</label>
  <input type="text" name="email" required placeholder="Your Email.."/>
  <label for="phonenumber">Phonenumber</label>
  <input type="text" name="phonenumber" required placeholder="Your Phonenumber.."/>
 
 

  <label for="gender">Gender</label>
  <select id="gender" type="text" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>



  <input type="submit" value="Register"/>

</form>


   

      <input class="button" type="button" value="Back To Login" onclick="document.location='login.php'"/>
   </body>
</div>
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

</html>

