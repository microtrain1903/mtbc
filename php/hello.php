<?php
//$msg2 = 'Hello $name';
//$msg3 = 'Hello '.$name;
//echo "Hello World";
$name = 'Bob Smith';
$greeting = "Hello {$name}";
$count = 5;
$price = 3.00;
$total=($count*$price);
$msg = "I see you have {$count} oranges, that will be \${$total}";
?>

<!DOCTYPE html>
<html lan="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1> <?php echo $greeting; ?> </h1>
        <h2> <?php echo $msg; ?> </h2>
    </body>
</html>