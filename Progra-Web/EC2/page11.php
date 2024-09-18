<?php include 'includes/header.php'  ?>

<h1>Registro de artículos</h1>
<form name='frm' method='POST' action="producto.php">
    <!-- Campos nombre artículo -->
    <div>
        <label>Ingresa el nombre del articulo</label>
        <input type="text" name="articulo-nombre-input">
    </div>
    <!-- Campos precio artículo -->
    <div>
        <label>Ingresa el precio del articulo</label>
        <input type="text" name="articulo-precio-input">
    </div>
    <!-- Campos codigo artículo -->
    <div>
        <label>Ingresa el codigo del articulo</label>
        <select name="codigo">
            <option value="1">Codigo 1</option>
            <option value="2">Codigo 2</option>
            <option value="3">Codigo 3</option>
        </select>
    </div>
    <button type="submit">Enviar</button>
</form>


<?php include 'includes/footer.php'  ?>