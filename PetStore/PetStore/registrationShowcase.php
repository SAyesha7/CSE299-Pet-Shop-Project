<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mockupTableshowcase.css">

</head>

<body>

<?php
include("Config.php");
   session_start();

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$sql = "SELECT * FROM `user`";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Password</th><th>email</th><th>phone</th><th>gender</th></tr>";

    while($row = $result->fetch_assoc()) {

        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["password"]."</td><td>".$row["email"]."</td><td>" . $row["phone"]."</td><td>" . $row["gender"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$db->close();
?>

</body>
</html>