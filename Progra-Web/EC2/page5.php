<?php include 'includes/header.php'  ?>
<?php
//variables 3
$num1 = 10;
$num2 = 20;
$num3 = 30;
$num4 = 40;

//suma
echo $num1 + $num2;
echo "<hr>";

//resta
echo $num4 - $num3;
echo "<hr>";

//multiplicacion
echo $num1 * $num2;
echo "<hr>";

//division
echo $num4 / $num1;
echo "<hr>";

//residuo mod
echo $num1 % 2;
echo "<hr>";

//parentesis y flotantes
echo ($num1 + $num2) * ($num1 * .16);
echo "<hr>";
?>

<?php include 'includes/footer.php'  ?>