<?php
session_start();
include 'dbConnection.php';
if (isset($_POST 'btnLogin')) {
  $email = $_POST('txtEmail');
  $password = $_POST('txtPassword');
  $query = "SELECT * FROM tblstudents
    WHERE email='$email' AND password='$password'";
  $results = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($results);
  $count = mysqli_num_rows($results); //1
  if ($count == 1) {
    $_SESSION["id"] = $row["ID"];
    $_SESSION["username"] = $row["email"];
    $_SESSION["fullname"] = $row["firstname"] . " " . $row["lastname"];
    echo 'login successful!';
    //redirect
    header('Location:index.php');
    //header('Refresh:3, url=index.php');//delay
  } else {
      echo 'invalid credentials';
  }
}
?>
