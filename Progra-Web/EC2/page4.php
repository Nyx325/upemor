<?php include 'includes/header.php'  ?>
<?php
$nombre = "Rubén";
$apellido = "Román";
?>
<h1>
    <?php
    echo $nombre . ' ' . $apellido
    ?>
</h1>

<?php
echo "<h2>{$nombre} {$apellido}</h2>";
?>
<?php include 'includes/footer.php'  ?>