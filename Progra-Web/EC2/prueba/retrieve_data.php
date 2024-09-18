<!--
Las sesiones en PHP son una forma de almacenar 
información sobre el usuario a través de múltiples
solicitudes HTTP. Esto es útil para guardar datos
temporales que deben persistir durante la navegación
del usuario, como el estado de inicio de sesión o
los datos del formulario que se deben conservar
entre páginas.

Conceptos Clave de Sesiones en PHP:

1.-Inicio de la Sesión: Para empezar a usar sesiones en
PHP, debes llamar a session_start() al principio de 
cada script que necesite acceder a las variables de 
sesión. Esto inicia una sesión o reanuda una sesión 
existente.

<?php
session_start(); // Debe estar al principio del script
?>

1.-Almacenar Datos en la Sesión: Puedes almacenar datos
en la sesión asignando valores a la superglobal
$_SESSION.

<?php
session_start();
$_SESSION['nombre'] = 'Juan';
$_SESSION['edad'] = 25;
?>

Estos datos estarán disponibles en cualquier página que 
tenga session_start() al principio.

3.- Acceder a los Datos de la Sesión: Puedes acceder a
los datos almacenados en la sesión en cualquier script
que llame a session_start().

<?php
session_start();
echo $_SESSION['nombre']; // Imprime 'Juan'
echo $_SESSION['edad']; // Imprime 25
?>

-->

<?php
// Iniciar la sesión
session_start();

// Verificar si ya existen usuarios en la sesión
if (isset($_SESSION['usuarios']) && count($_SESSION['usuarios']) > 0) {
    foreach ($_SESSION['usuarios'] as $usuario) {
        echo "<tr><td>" . htmlspecialchars($usuario['nombre']) . "</td><td>" . htmlspecialchars($usuario['edad']) . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='2'>No hay registros</td></tr>";
}
?>
