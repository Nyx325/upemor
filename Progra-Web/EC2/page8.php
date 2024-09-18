<?php include 'includes/header.php'  ?>
<?php
$tecnologia = "HTML";
switch ($tecnologia) {

    case 'MYSQL':
        echo "Back-end";
        break;

    case 'PHP':
        echo "Back-end";
        break;

    case 'HTML':
        echo "Front-end";
        break;

    case 'CSS':
        echo "Front-end";
        break;

    default:
        echo "Opcion invalida";
        break;
}



?>

<?php include 'includes/footer.php'  ?>