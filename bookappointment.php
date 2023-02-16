<?php

    include 'dbConnection.php';

    error_reporting(0);

    session_start();

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $gender = $_POST['gender'];
        $date = $_POST['date'];
        $day = $_POST['day'];
        $time = $_POST['time'];
        $medicalAppointment = $_POST['medicalAppointment'];


        $query = "SELECT * FROM appointmentlists WHERE email='$email'";
        $result = mysqli_query($connection, $query);
        if(!$result->num_rows > 0) {
            $query = "INSERT INTO `appointmentlists`(`username`, `email`, `phoneNumber`, `gender`, `date`, `day`, `time`, `medicalAppointment`) 
            VALUES ('$username','$email','$phoneNumber','$gender','$date','$day','$time','$medicalAppointment')";
            $query = "SELECT * FROM appointmentlists WHERE date='$date' and day='$day' and medicalAppointment='$medicalAppointment'";
            $result = mysqli_query ($connection, $query);
            if(!$result->num_rows > 0) {
                $query = "INSERT INTO `appointmentlists`(`username`, `email`, `phoneNumber`, `gender`, `date`, `day`, `time`, `medicalAppointment`) 
                VALUES ('$username','$email','$phoneNumber','$gender','$date','$day','$time','$medicalAppointment')";
                $result = mysqli_query ($connection, $query);
                if ($result) {
                    echo '<script>alert("Booking Successfully~Thank You")</script>';
                    $username = "";
                    $email = "";
                    $phoneNumber = "";
                    $gender = "";
                    $date = "";
                    $day = "";
                    $time = "";
                    $medicalAppointment = "";
                }  else {
                    echo '<script>alert("Oops! It is not successful!")</script>';
                }
            } else {
                echo "<script>alert('Oops! This day and time has been taken. Please choose another one.')</script>";
            }
        } else {
            echo "<script>alert('Oops! This email has been taken. Please choose another email.')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bookappointment.css">
    <title>Appointment Form</title>
</head>
<body>
    <div class="upper-container">
        <img class="cloud" src="cloud.png" alt="cloud.png">
        <marquee width="500px">Welcome to Senior Care!!!</marquee>
    </div>
    <h3>Book an appointment~</h3>
    <hr>
    <div class="lower-container">
    <img class="doctor-img circular" src="doctor-image.jpg" alt="doctor-img" >
    <form action="#" method="post">
        <table>
            <tr>
                <td>Username: </td>
                <td><input class="input" type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input class="input" type="email"  name="email" required></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input class="input" type="number"  name="phoneNumber" required></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td>
                    <select class="input" name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date: </td>
                <td><input class="input" type="date"  name="date" value="Date" required></td>
            </tr>
            <tr>
                <td>Day: </td>
                <td>
                <select class="input" name="day" required>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Time: </td>
                <td>
                <select class="input" name="time" required>
                    <option value="8:00 a.m - 8:30 a.m">8:00 a.m - 8:30 a.m</option>
                    <option value="8:30 a.m - 9:00 a.m">8:30 a.m - 9:00 a.m</option>
                    <option value="9:00 a.m - 9:30 a.m">9:00 a.m - 9:30 a.m</option>
                    <option value="9:30 a.m - 10:00 a.m">9:30 a.m - 10:00 a.m</option>
                    <option value="10:00 a.m - 10:30 a.m">10:00 a.m - 10:30 a.m</option>
                    <option value="10:30 a.m - 11:00 a.m">10:30 a.m - 11:00 a.m</option>
                    <option value="1:00 p.m - 1:30 p.m">1:00 p.m - 1:30 p.m</option>
                    <option value="1:30 p.m - 2:00 p.m">1:30 p.m - 2:00 p.m</option>
                    <option value="2:00 p.m - 2:30 p.m">2:00 p.m - 2:30 p.m</option>
                    <option value="2:30 p.m - 3:00 p.m">2:30 p.m - 3:00 p.m</option>
                    <option value="3:00 p.m - 3:30 p.m">3:00 p.m - 3:30 p.m</option>
                    <option value="3:30 p.m - 4:00 p.m">3:30 p.m - 4:00 p.m</option>
                    <option value="4:00 p.m - 4:30 p.m">4:00 p.m - 4:30 p.m</option>
                    <option value="4:30 p.m - 5:00 p.m">4:30 p.m - 5:00 p.m</option>
                    <option value="7:00 p.m - 7:30 p.m">7:00 p.m - 7:30 p.m</option>
                    <option value="7:30 p.m - 8:00 p.m">7:30 p.m - 8:00 p.m</option>
                    <option value="8:00 p.m - 8:30 p.m">8:00 p.m - 8:30 p.m</option>
                    <option value="8:30 p.m - 9:00 p.m">8:30 p.m - 9:00 p.m</option>
                    <option value="9:00 p.m - 9:30 p.m">9:00 p.m - 9:30 p.m</option>
                    <option value="9:30 p.m - 10:00 p.m">9:30 p.m - 10:00 p.m</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Medical Appointment: </td>
                <td>
                <select class="input" name="medicalAppointment" required>
                    <option value="Basic Illness Treatment - Dr Lee">Basic Illness Treatment - Dr Lee</option>
                    <option value="Basic Body Check Up - Dr James">Basic Body Check-Up - Dr James</option>
                    <option value="ENT Treatment - Dr Amir">ENT Treatment - Dr Amir</option>
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center"><input type="submit" name="submit" value="Book Now!" class="btnSubmit"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>