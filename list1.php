<?php
    include 'dbConnection.php';

    $query = 'SELECT * FROM tblstudents';
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['ID'] . ' ' . $row['firstName'] . ' ' . $row['lastName'] . ' ' . $row['email'] . ' ' . $row['gender'] . ' ' . $row['country'] . '<br>';
    }

    mysqli_close($connection);
?>



