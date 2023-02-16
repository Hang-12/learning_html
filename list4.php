<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
    include 'dbConnection.php';

    $query = "SELECT * FROM tblstudents";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
    ?>
        <h2>Student List</h2>
        <table border="1" cellspacing="2" cellpadding="4">
            <tr>
                <th>Action</th>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Gender</th>
                <th>Country</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td>
                        <a href="edit.php?id=<?php echo $row['ID']; ?>">EDIT</a>
                        <a href="delete.php?id=<?php echo $row['ID']; ?>">DELETE</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['ID']; ?>">
                            <?php echo $row['ID']; ?>
                        </a>
                    </td>
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
    mysqli_close($connection); ?>
</body>
</html>
