<?php include 'includes/header.php'  ?>

<h1>Cálculo de Inversión con Interés Compuesto</h1>

<form method="post" action="">
  <label for="capitalinicial">Cantidad a Invertir (Capital Inicial):</label>
  <input type="number" step="0.01" id="capitalinicial" name="capitalinicial" required>
  <br><br>

  <label for="tasadeinteres">Tasa de Interés Anual (%):</label>
  <input type="number" step="0.01" id="tasadeinteres" name="tasadeinteres" required>
  <br><br>

  <label for="periodo">Número de Años (Periodo):</label>
  <input type="number" id="periodo" name="periodo" required>
  <br><br>

  <button type="submit">Calcular Capital Total</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos del formulario
  $capitalInicial = $_POST['capitalinicial'];
  $tasaDeInteres = $_POST['tasadeinteres'] / 100; // Convertir porcentaje a decimal
  $periodo = $_POST['periodo'];

  // Fórmula del interés compuesto: M = C * (1 + i) ^ n
  $capitalTotal = $capitalInicial * pow((1 + $tasaDeInteres), $periodo);

  // Mostrar el resultado
  echo "<h2>Resultado de la Inversión</h2>";
  echo "<p>Capital Inicial: $$capitalInicial</p>";
  echo "<p>Tasa de Interés Anual: " . ($_POST['tasadeinteres']) . "%</p>";
  echo "<p>Periodo (años): $periodo</p>";
  echo "<p><strong>Capital Total al final del periodo: $" . number_format($capitalTotal, 2) . "</strong></p>";
}
?>
