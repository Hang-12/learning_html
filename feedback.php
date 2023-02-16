<?php
  include 'dbConnection.php';
  if (isset($_GET['btnSend'])) {
    $name = $_GET['txtName'];
    $email = $_GET['txtEmail'];
    $feedback = $_GET['txtFeedback'];
  
    $query ="INSERT INTO `tblfeedback`(`name`, `email`, `feedback`) 
    VALUES ('[$name]','[$email]','[$feedback]')";
    if (mysqli_query ($connection, $query)) {
      echo 'Thank you for your feedback!';
      // header('Location: displayFB.php');
      header("Refresh:3; url=displayFB.php");
    } else {
        echo 'Server error, please try again.';
    }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Customer Feedback</h2>
    <form action="#" method="get">
      <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="txtName"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="txtEmail"></td>
        </tr>
        <tr>
          <td>Feedback</td>
          <td><textarea name="txtFeedback" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Send Feedback" name="btnSend"></td>
          <td><input type="reset" value="Clear"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
