<?php include 'includes/header.php'  ?>

<h1>Calcular salario semanal</h1>
<form method="post" action="">
    <label>Horas trabajadas:</label>
    <input type="number" id="input-horas" name="input-horas" required>
    <br><br>
    <button type="submit">Calcular salario</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $horasTrabajadas = $_POST['input-horas'];

    // Variables generales
    $salarioHora = 16;
    $salarioExtra = 20;
    $salarioNormal = 0;
    $salarioTotal = 0;
    $salarioHorasExtras = 0;
    $horasNormales = 40;

    // Parte (a): Calcular salario semanal
    if ($horasTrabajadas <= 40) {
        // Si trabaja 40 horas o menos
        $salarioTotal = $horasTrabajadas * $salarioHora;
        echo "<p>El salario semanal es: $$salarioTotal</p>";
    } else {
        // Si trabaja más de 40 horas
        $horasExtras = $horasTrabajadas - 40;
        $salarioNormal = 40 * $salarioHora;
        $salarioHorasExtras = $horasExtras * $salarioExtra;
        $salarioTotal = $salarioNormal + $salarioHorasExtras;

        echo "<p>El salario semanal es: $$salarioTotal</p>";
    }

    // Parte (b): Calcular pago por horas extras
    if ($horasTrabajadas > 40) {
        $horasExtras = $horasTrabajadas - 40;
        if ($horasExtras <= 8) {
            // Las horas extras hasta 8 se pagan al doble
            $salarioHorasExtras = $horasExtras * ($salarioHora * 2);
        } else {
            // Las primeras 8 horas extras se pagan al doble, el resto al triple
            $salarioHorasExtras = (8 * ($salarioHora * 2)) + (($horasExtras - 8) * ($salarioHora * 3));
        }

        echo "<p>El pago por horas extras es: $$salarioHorasExtras</p>";
    } else {
        echo "<p>No se trabajaron horas extras.</p>";
    }
}
?>

<?php include 'includes/footer.php'  ?>