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
<link rel="stylesheet" type="text/css" href="mysinguostyle.css">

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


   <body>

      <input class="button" type="button" value="Back To Login" onclick="document.location='login.php'"/>
   </body>
</div>

</html>

