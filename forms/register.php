
<?php
  
    // the message
  $name=$_POST["name"];
  $email=$_POST["email"];
  $major=$_POST["major"];
  $team=$_POST["team"];
  $phone=$_POST["phone"];
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "masar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO register (name, email,major,team,phone)
VALUES ('$name', '$email','$major','$team', '$phone')";

if ($conn->query($sql) === TRUE) {
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>done</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="alert alert-success">
    <strong>Success!</strong>  Registeration.
  </div>
  </div>