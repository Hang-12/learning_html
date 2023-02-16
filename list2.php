<?php
    include 'dbConnection.php';

    $query = 'SELECT * FROM tblstudents ORDER BY ID DESC';
    $result = mysqli_query($connection, $query);

    echo '<table border="1" cellspacing="2" cellpadding="4">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Gender</th>
        <th>Country</th>
    </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['ID'] . '</td>';
        echo '<td>' . $row['firstName'] . '</td>';
        echo '<td>' . $row['lastName'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['gender'] . '</td>';
        echo '<td>' . $row['country'] . '</td>';
        echo '</tr>';
    }

    mysqli_close($connection);
?>
    </table>