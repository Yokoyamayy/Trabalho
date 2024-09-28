<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if (isset($_COOKIE["idioma"])) {
    include "compara.inc";
} else {
    echo '
        <h1 id="principal">Bem vindo ao Site Web Design em Foco</h1>
        <br><br><br><br><br>
        <h2>Escolha o idioma para entrar.</h2>
        <br><br><br><br>
        <a href="./idioma.php?lang=en">
            <img class="icone" src="./icons/uk.png" alt="UK">
        </a>
        <a href="./idioma.php?lang=pt">
            <img class="icone" src="./icons/br.png" alt="Brasil">
        </a>
        <a href="./idioma.php?lang=es">
            <img class="icone" src="./icons/es.png" alt="ES">
        </a>
    ';
}
?>

</body>
</html>