<?php

//echo "Hello World";
$name = 'Bob Smith';
$msg = "Hello {$name}";
$msg2 = 'Hello $name';
$msg3 = 'Hello '.$name;

?>

<!DOCTYPE html>
<html lan="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1> <?php echo 'Hello World'; ?> </h1>
        <h2> <?php echo $msg3; ?> </h2>
        <h3> <?php echo $msg3; ?> </h3>
        <h4> <?php echo $msg3; ?> </h4>
    </body>
</html>