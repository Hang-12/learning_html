<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        Enter Country Name: <input type="text" name="txtCountry">
        <input type="submit" value="Search" name="txtSearch">
    </form>
    <?php
    include 'dbConnection.php';

    if (isset($_GET['txtSearch'])) {
        $country = $_GET['txtCountry'];
        $query = "SELECT * FROM tblstudents WHERE country = '$country'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) > 0) {
    ?>
            <h2>Student List</h2>
            <table border="1" cellspacing="2" cellpadding="4">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Gender</th>
                    <th>Country</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['firstName']; ?></td>
                        <td><?php echo $row['lastName']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php 
          }
        }
        mysqli_close($connection); ?>
</body>
</html>
