<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sample string computation in PHP</h2>
    <form name="frmRegistration" action="#" method="get">
        Name: <input type="text" required name="txtName">
        <input type="submit" value="Submit" name="btnSend">
    </form>
    <?php
    if (isset($_GET['btnSend'])) {
        // echo 'User clicked this button!';
        $name = $_GET['txtName'];
        // check if the textbox has a value
        echo "<hr>Welcome to WDT, $name";
        }
    // else {
    //     echo 'User did not click this button!';
    ?>
    <hr>
    <h2>Sample computation in PHP</h2>
    <form name="frmCompute" action="#" method="get">
        Enter first value: <input type="number" required name="txtVal1"><br>
        Enter second value: <input type="number" required name="txtVal2"><br>
        <input type="submit" value="Compute" name="btnCompute">
    </form>
    <?php
        if (isset($_GET['btnCompute'])) {
            $val1 = $_GET['txtVal1'];
            $val2 = $_GET['txtVal2'];
            $sum = $val1 + $val2;
            $prod = $val1 * $val2; 
            $diff = $val1 - $val2;
            $quo = $val1 / $val2;
            echo "<hr>Sum: $sum";
            echo "<br>Product: $prod";
            echo "<br>Difference: $diff";
            echo "<br>Quotient: $quo";
            }
    ?>
</body>
</html>