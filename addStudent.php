<?php
    include 'dbConnection.php';
    if (isset($_POST['btnRegister'])) {
        $fname = $_POST['txtFName'];
        $lname = $_POST['txtLName'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $query = "INSERT INTO `tblstudents`(`firstName`, `lastName`, `email`, `gender`, `country`) 
        VALUES ('$fname','$lname','$email','$gender','$country')";
        if (mysqli_query ($connection, $query)) {
            echo 'Record insert';
        } else {
            echo 'Error inserting';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        First Name: <input type="text" name="txtFName"><br>
        Last Name: <input type="text" name="txtLName"><br>
        Email: <input type="text" name="email"><br>
        Gender: <input type="text" name="gender"><br>
        Country: <input type="text" name="country"><br>
        <input type="submit" value="Register" name="btnRegister">
    </form>
</body>
</html>