<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <h2>Temperature Conversation</h2>
    <form action="#" method="post">
      Enter the temperature in Centigrade: <input type="number" name="txtTemperatureC"><br>
      <input type="submit" name="btnSend1" value="Submit">
    </form>
      <?php
        if(isset($_POST['btnSend1'])) {
          $val1 = $_POST['txtTemperatureC'];
          $calculation = ($val1 * 9 / 5) + 32;
          echo "Temperature in Fahrenheit: $calculation";
          }
       ?>
     <form action="#" method="post">
       Enter the temperature in Fahrenheit: <input type="number" name="txtTemperatureF"><br>
       <input type="submit" name="btnSend2" value="Submit">
     </form>
       <?php
         if(isset($_POST['btnSend2'])) {
           $val2 = $_POST['txtTemperatureF'];
           $calculation1 = ($val2 - 32) * 5 / 9;
           echo "Temperature in Fahrenheit: $calculation1";
          }
        ?>
  </body>
</html>
