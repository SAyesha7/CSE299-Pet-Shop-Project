<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mockupTableshowcase.css">
<link rel="stylesheet" type="text/css" href="salonregistration.css">

</head>

<body>

<?php
include("Config.php");
   session_start();

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$sql = "SELECT * FROM `salonappointment`";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>email</th><th>petname</th><th>petspecies</th><th>vet</th><th>reason</th><th>comments</th></tr>";

    while($row = $result->fetch_assoc()) {

        echo "<tr><td>" . $row["ownername"]. "</td><td>" . $row["email"]."</td><td>".$row["petname"]."</td><td>" . $row["vet"]."</td><td>" . $row["petspecies"]."</td><td>". $row["reason"]."</td><td>". $row["comments"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

if(isset($_POST['name'])){
    $nameofuser=$_POST['name'];
    
    $sql = "DELETE FROM `salonappointment` WHERE `ownername`= '$nameofuser'";
    
    if ($db->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $db->error;
      }
    }
    else
    echo "error";

$db->close();
?>
<body>
<form method="post">
   <label for="name">Name</label>
  <input type="text" name="name" required placeholder="customer name.."/>
  <input type="submit" value="Register"/>
</form>
</body>

</body>
</html>