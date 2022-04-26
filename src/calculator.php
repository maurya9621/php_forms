<!DOCTYPE html>
<head>
	<title> Calculator </title>
</head>
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];
$output = '';
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operator) {
        case " + ":
           $output = $num1 + $num2;
            break;
        case " - ":
           $output = $num1 - $num2;
            break;
        case " * ":
            $output = $num1 * $num2;
            break;
        case " / ":
            $output = $num1 / $num2;
    }
}
?>
<body>
    <div class="calculator">
	  <form action="" method="post">
            <p>
                <input type="number" name="num1" required="required" value="<?php echo $num1; ?>" /> <b> Number_1</b>
            </p>
            <p>
                <input type="number" name="num2"  required="required" value="<?php echo $num2; ?>" /> <b> Number_2</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $output; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value=" + " />
            <input type="submit" name="operator" value=" - " />
            <input type="submit" name="operator" value=" * " />
            <input type="submit" name="operator" value=" / " />
	  </form>
    </div>
</body>
</html>
