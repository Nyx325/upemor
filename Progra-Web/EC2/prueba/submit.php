<?php
// Iniciar la sesión
session_start();

// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];

    // Verificar que ambos campos estén completos
    if (!empty($name) && !empty($age)) {
        // Crear un nuevo registro como array asociativo
        $new_entry = array("nombre" => $name, "edad" => $age);

        // Si la sesión no tiene todavía un array de usuarios, inicializarlo
        if (!isset($_SESSION['usuarios'])) {
            $_SESSION['usuarios'] = array();
        }

        // Agregar el nuevo registro al array de la sesión
        $_SESSION['usuarios'][] = $new_entry;
    }
}

// Redirigir al formulario principal después de enviar
header("Location: index.php");
exit();
?>
