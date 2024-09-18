<?php
echo "<p><a href=\"./index.html\">Volver</a></p>";
echo "<p>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la figura seleccionada
    $figura = $_POST['figura'];

    // Calcular el área según la figura seleccionada
    switch ($figura) {
        case 'circulo':
            $radio = $_POST['radio'];
            $area = pi() * pow($radio, 2);
            break;
        case 'cuadrado':
            $lado = $_POST['lado'];
            $area = pow($lado, 2);
            break;
        case 'triangulo':
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            $area = ($base * $altura) / 2;
            break;
        case 'rombo':
            $dMayor = $_POST['d-mayor'];
            $dMenor = $_POST['d-menor'];
            $area = ($dMayor * $dMenor) / 2;
            break;
        case 'pentagono':
            $longLado = $_POST['long-lado'];
            $apotema = $_POST['apotema'];
            $perimetro = 5 * $longLado;
            $area = ($perimetro * $apotema) / 2;
            break;
        case 'trapecio':
            $bMayor = $_POST['b-mayor'];
            $bMenor = $_POST['b-menor'];
            $altura = $_POST['altura'];
            $area = (($bMayor + $bMenor) * $altura) / 2;
            break;
        case 'cubo':
            $lado = $_POST['lado'];
            $area = 6 * pow($lado, 2);
            break;
        case 'cilindro':
            $radio = $_POST['radio'];
            $altura = $_POST['altura'];
            $area = 2 * pi() * $radio * ($radio + $altura);
            break;
        default:
            $area = 'Figura no válida';
            break;
    }

    // Mostrar el resultado
    echo "El área del $figura es: $area";
}
?>