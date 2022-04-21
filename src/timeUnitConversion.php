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
<input type = "number" name = "lenth"> input
<br>
<br><br><input  type="radio" name="minutes" value="minutes" > Hours to Minutes<br>
<input type="radio" name="second" value="second">Minutes to seconds<br>
<br> <br> <br> 
<?php
$l=$_POST['lenth'];
$m = $l*60;
$s=$l*60*60;
?>
<?php
     if (isset($_POST['minutes']) || isset($_POST['second'])) {
   if (isset($_POST['minutes'])) { 
         echo $l."hours"."=". $m."minutes"; 
         echo "<br>";
    } elseif (isset($_POST['second'])) { 
          echo $l."hours"."=". $s."seconds";
      }
 } 
?>
<br> <br> <br>
<input type="submit" name="submit"  value="convert">
</form>   
</body>
</html>
