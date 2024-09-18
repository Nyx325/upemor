<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prueba</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Prueba</h1>
    </header>
    <main>
        <section id="right-panel">
            <form id="data-form" action="submit.php" method="post">
                <div>
                    <label for="name-input">Nombre</label>
                    <input type="text" id="name-input" name="name" required>
                </div>
                <div>
                    <label for="age-input">Edad</label>
                    <input type="text" id="age-input" name="age" required>
                </div>
                <button type="submit">Guardar</button>
            </form>
        </section>
        <section id="left-panel">
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                </tr>
                <?php
                require 'retrieve_data.php';
                ?>
            </table>
        </section>
    </main>
</body>
</html>
