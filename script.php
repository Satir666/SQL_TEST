<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  myFunction();
}

function myFunction() 
{
  <?php echo '<p>Hello World</p>'; ?>
}
?>
