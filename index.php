<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,700;1,400&family=Patrick+Hand&family=Raleway&family=Sofia+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/93104.png">
    <link rel="stylesheet" href="./css/styles.css">
    <title>🍔HAMBURGUESERÍA LUNA🍔</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <h1>🍔HAMBURGUESERÍA LUNA🍔</h1>
    <div class="column-3 columns">
        <div class="menu-restaurante">
            <h2>ENTRANTES🥗</h2>
            <?php
            /* Enlace al primer XML */
            if (file_exists('./xml/entrantes.xml')) {
                $platos = simplexml_load_file('./xml/entrantes.xml');
                foreach ($platos->plato as $plato) {
                    echo "<strong>" . $plato['nombre'] . "</strong><br>";
                    echo "Precio: €" . $plato['precio'] . "<br>";
                    echo "Descripción: " . $plato['descripcion'] . "<br>";
                    echo "Calorías: " . $plato['kcal'] . "<br>";
                    echo "Ingredientes:<br>";
                    foreach ($plato->ingrediente as $ingrediente) {
                        echo "- " . $ingrediente['nombre'] . "<br>";
                    }
                    echo "<br>";
                }
            } else {
                exit('¡Restaurante fuera de servicio!.');
            }
            ?>
        </div>
    <div class="menu-restaurante">
    <h2>POSTRES Y BEBIDAS🥤</h2>
    <?php
/* Enlace al segundo XML */
if (file_exists('./xml/postres.xml')) {
    $platos = simplexml_load_file('./xml/postres.xml');
    foreach ($platos->plato as $plato) {
        echo "<strong>" . $plato['nombre'] . "</strong><br>";
        echo "Precio: €" . $plato['precio'] . "<br>";
        echo "Descripción: " . $plato['descripcion'] . "<br>";
        echo "Calorías: " . $plato['kcal'] . "<br><br>";
    }
} else {
    exit('¡Restaurante fuera de servicio!.');
}
?>
    </div>
    <div class="menu-restaurante">
    <h2>HAMBURGUESAS🍔</h2>
    <?php
/* Enlace al tercer XML */
if (file_exists('./xml/segundos.xml')) {
    $platos = simplexml_load_file('./xml/segundos.xml');
    foreach ($platos->plato as $plato) {
        echo "<strong>" . $plato['nombre'] . "</strong><br>";
        echo "Precio: €" . $plato['precio'] . "<br>";
        echo "Descripción: " . $plato['descripcion'] . "<br>";
        echo "Calorías: " . $plato['kcal'] . "<br>";
        echo "Ingredientes:<br>";
        foreach ($plato->ingrediente as $ingrediente) {
            echo "- " . $ingrediente['nombre'] . "<br>";
        }
        echo "<br>";
    }
} else {
    exit('¡Restaurante fuera de servicio!.');
}
?>
    </div>
</div>
</body>
</html>