<?php include 'includes/header.php'  ?>

<?php 
    $nombre = "Daniel Tellez";
    $cliente = "DANIEL";

    //Conocer la longitud de la cadena
    echo strlen($nombre) . "<br>";
    //Eliminar espacios en blanco y
    //saltos de linea
    echo trim("   dslajdkaslj  \n");
    echo "asda<br>";
    //Convertir a mayusculas
    echo strtoupper($nombre) . "<br>";
    //Convertir a minusculas
    echo strtolower($cliente) . "<br>";

    $carrito = ['Tablet', 'Televisión', 'Computadora'];
    echo "<pre>";
    echo var_dump($carrito);
    echo "</pre>";
?>

<?php include 'includes/footer.php'  ?>
