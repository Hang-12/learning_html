<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <h2>Form Calculation</h2>
    <form action="#" method="post">
      Enter the miles: <input type="number" name="txtMiles"><br>
      <input type="submit" name="btnSend" value="Submit">
    </form>
      <?php
        if(isset($_POST['btnSend'])) {
          $val = $_POST['txtMiles'];
          $calculation = $val * 1.6;
          echo "Calculation: $calculation";
        }
       ?>
  </body>
</html>
