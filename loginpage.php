


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <br><br><br>
    <center>
<div>


    <form action="loginpage.php" method="post">


    <label for="">userId : </label><br>
    <input type="text" placeholder="UserID" name="userid"><br><br>


    <label for="">Password : </label><br>
    <input type="password" placeholder="PWD" name="pwd"><br>


    <br><br>
<button type="submit" name="sub">Login<?php


if(isset($_POST['sub'])){

 $id =  $_POST['userid'];

$pwd = $_POST['pwd'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "janak";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection


$sql = "INSERT INTO users (username,pwd) VALUES ( '$id', '$pwd')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('location:allmovies.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




}








?></button><br>

    </form>
</div>




</center>
</body>
</html>