<?php
    include 'dbConnection.php';
    $query = "SELECT * FROM tblFeedback ORDER BY id DESC";
    $result = mysqli_query($connection, $query);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2 {
            text-align: center;
        }

        hr {
            width: 50%;
            background-color: blue;
        }

        .feedback {
            margin: 0 auto;
            height: 100px;
            width: 500px;
            background-color: #f2f2f2;
            box-shadox: 10px 9px 5px -6px rgba(0,0,0,0.75);
            -webkit-box-shadow: 10px 9px 5px -6px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 9px 5px -6px rgab(0,0,0,0.75);
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h2>Summary of Feedback</h2>
    <hr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="feedback">
            <table>
                <tr>
                    <td>Name</td>
                    <td><em><?php echo $row['name']; ?></em></td>
                </tr>
                <tr>
                    <td>Email Address</td>
                    <td><em><?php echo $row['email']; ?></em></td>
                </tr>
                <tr>
                    <td>Feedback</td>
                    <td><?php echo $row['feedback']; ?></td>
                </tr>
            </table>
        </div>
        <br>
    <?php }
    mysqli_close($connection); ?>
</body>
</html>