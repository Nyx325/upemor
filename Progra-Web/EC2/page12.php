<?php include 'includes/header.php'  ?>

<?php
//While
$i = 0;
while ($i < 10) {
    echo $i . "<br>";
    $i++;
}
echo "<hr>";

//do while
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);

echo "<hr>";


//for
for ($x = 0; $x < 10; $x++) {
    echo $x . "<br>";
}
echo "<hr>";

//foreach establece un loo´p para recorrer arreglos
$clientes = array('Hugo', 'Paco', 'Luis');
foreach ($clientes as $Cliente) {
    echo $Cliente . "<br>";
}

?>
<?php include 'includes/footer.php'  ?>