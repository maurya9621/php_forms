<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
Enter the length
<input type = "number" name = "lenth"> mtr.
<br>
Enter the width
<input type = "number" name = "wdth">mtr.
<br>
<input type= "submit" value = "submit" name="btnsubmit"> 
</form>   
</body>
<?php
$l=$_POST['lenth'];
$b=$_POST['wdth'];
$area=$l*$b;
$peri= 2*($l+$b);
echo "The area of rectangle ".$area." "."sq. mtr"."<br>";
echo "The perimeter of rectangle ".$peri." "."sq. mtr"."<br>";
?>
</html>