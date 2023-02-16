<?php
include 'dbConnection.php';

$id = $_GET['id']; //this is coming from your URL

// if (isset($_POST['btnDelete'])) {
    // $fname = $_POST['txtFName'];
    // $lname = $_POST['txtLName'];
    // $email = $_POST['txtEmail'];
    // $gender = $_POST['txtGender'];
    // $country = $_POST['txtCountry'];
    $query = "DELETE FROM `tblstudents` WHERE ID='$id'";
    if (mysqli_query($connection, $query)) {
        echo 'record DELETED!';
        header('Location: list4.php');
    } else {
        echo 'error DELETING!';
    }
// }
// echo "This is the ID that has been retrieved from list4.php, $id";
$query = "SELECT *FROM tblStudents WHERE ID='$id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result); //1 record
//display the record details
// echo $row['firstName'];
// echo '<br>';
// echo $row['lastName'];
// echo '<br>';
// echo $row['email'];
// echo '<br>';
// echo $row['gender'];
// echo '<br>';
// echo $row['country'];
// echo '<br>';
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        First Name: <input type="text" disabled value="<?php echo $row['firstName']; ?>" name="txtFName"><br>
        Last Name: <input type="text" disabled value="<?php echo $row['lastName']; ?>" name="txtLName"><br>
        Email: <input type="text" disabled value="<?php echo $row['email']; ?>" name="txtEmail"><br>
        Gender: <input type="text" disabled value="<?php echo $row['gender']; ?>" name="txtGender"><br>
        Country: <input type="text" disabled value="<?php echo $row['country']; ?>" name="txtCountry"><br>
        <input type="submit" value="Delete Record" name="btnDelete">
        <a href="list4.php">Back</a>
    </form>
</body>
</html> -->