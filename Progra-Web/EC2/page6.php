<?php include 'includes/header.php'  ?>
<?php
//incrementos y decrementos
$num1 = 10;
$num1++;
echo $num1;
echo "<hr>";
$num1--;
echo $num1;

//incrementos en la misma variable
echo "<hr>";
$res = 0;
$res += 10;
$res += 20;
$res += 10;
echo $res;

echo "<hr>";
$res = 100;
$res -= 10;
$res -= 20;
$res -= 10;
echo $res;
?>

<?php include 'includes/footer.php'  ?>