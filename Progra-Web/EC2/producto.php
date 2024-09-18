<?php include './includes/header.php'  ?>
<a href="./page11.php">Volver</a><br>
<?php
$articulo = $_POST['txtarticulo'];
$precio = $_REQUEST['txtprecio'];

// isset valida si existe "el codigo(?)"
if (isset($_POST['codigo'])) {
    $codigo = $_REQUEST['codigo'];

    switch ($codigo) {
        case '1':
            $descuento = $precio * .15;
            $descuento = $precio - $descuento;
            echo "El artículo es: {$articulo}<br>";
            echo "El código es: {$codigo}<br>";
            echo "El precio orignal es: {$precio}<br>";
            echo "El precio con descuento es es: {$descuento}<br>";
            break;
        case '2':
            $descuento = $precio * .30;
            $descuento = $precio - $descuento;
            echo "El artículo es: {$articulo}<br>";
            echo "El código es: {$codigo}<br>";
            echo "El precio orignal es: {$precio}<br>";
            echo "El precio con descuento es es: {$descuento}<br>";
            break;

        default:
            # code...
            break;
    }
}

?>
<?php include './includes/footer.php'  ?>