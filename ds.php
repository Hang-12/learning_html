<?php
  $mn = 8;
  $userinput = 30;
  if($mn == $userinput) {
    echo 'You guessed my magic number correctly!';
  }
  elseif ($userinput > 20) {
    echo 'Input is too high!';
  }
  else {
    echo 'Sorry better luck next time!';
  }
?>
