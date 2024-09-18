<?php include 'includes/header.php'  ?>
<?php
//estructuras de control selectivas

if (0 < 1) {
        echo "Es verdadero el 0 es menor que 1";
} else {
        echo "Es falso el 1 es mayor que 0";
}

echo "<hr>";
$edad1 = 14;
$edad2 = 13;

if ($edad1 < $edad2) {
        echo "La edad 1 es menor";
} elseif ($edad1 == $edad2) {
        echo "Las edades son iguales";
} else {
        echo "La edad 2 es menor";
}


echo "<hr>";
$numero1 = 11;
if ($numero1 % 2 == 0) {
        echo "Es par";
} else {
        echo "Es impar";
}

?>

<?php include 'includes/footer.php'  ?>