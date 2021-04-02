<?php
   include("config.php");
   $name =$_POST['name'];
   $password=$_POST['password'];

   if (isset($_POST['name'])) {
    if (is_null($error)) {
      try {
        $stmt = $db->prepare("INSERT INTO `user` (`username`, `password`)  VALUES (?,?)");
        $stmt->bind_param('ss',$name,$password);
        $stmt->execute();
      } catch (Exception $ex) { $error = $ex->getMessage(); }
    }
  }
 
?>

<html>  

<form method="post">
  
  <label for="name">Name</label>
  <input type="text" name="name" required/>
  <label for="password">Password</label>
  <input type="text" name="password" required/>
  <input type="submit" value="Go!"/>
</form>

</html>

