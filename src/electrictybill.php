<!DOCTYPE html>
<head>
	<title>PHP - Calculate Electricity Bill</title>
</head>
<body>
	<div  class="e_bill" >
    <form action="" method="post" >
            	<input type="number" name="units" placeholder="enter units" />
            	<input type="submit" name="submit" value="Submit" />
		</form>	
	</div>
</body>
<?php
$result_str = $result = '';
if (isset($_POST['units'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}
?>
<?php
function bill($x) {
        if ($x<=50){
            $temp = $x * 3.50;
        }
        elseif ($x>50 && $x<=150) {
            $cout = 50*3.50;
            $rest = ($x-50)*4.00;
            $temp = $cout + $rest;
        }
        elseif ($x>150 && $x<=250) {
            $cout = 50*3.50;
            $rest = 100*4.00;
            $remaining = ($x - 150)*5.20;
            $temp = $cout + $rest + $remaining;
        }
        elseif ($x>250) {
            $cout = 50*3.50;
            $rest = 100*4.00;
            $remaining = 100*5.20;
            $rest_of = ($x - 250)* 6.50;
            $temp = $cout + $rest + $remaining + $rest_of;
        }
    return number_format((float)$temp, 2, '.', '');
}
?>
<div>
      <?php echo '<br>' . $result_str; ?>
		</div>
</html>