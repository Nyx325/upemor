<?php include 'includes/header.php'  ?>
<?php 
    $pi = 3.1416;
    $r = $_POST['txtradio'];
    $area = ($pi * $r * $r);
    echo "El área es {$area}";
?>
<?php include 'includes/footer.php'  ?>