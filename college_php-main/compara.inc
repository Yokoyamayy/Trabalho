<?php
$idioma = $_COOKIE['idioma'];
$conteudo = "";

switch ($idioma) {
    case 'en':
        $conteudo = "OUR PLANT\nThe XXX INDÚSTRIA DE MÁQUINAS LTDA, was founded on 1970, and became the most important and traditional supplier of BAGGING MACHINES in Brazil.";
        break;
    case 'pt':
        $conteudo = "EMPRESA\nA XXX INDÚSTRIA DE MÁQUINAS LTDA, foi fundada em 1970, e tornou-se o mais importante e tradicional fabricante de máquinas ensacadeiras no Brasil.";
        break;
    case 'es':
        $conteudo = "EMPRESA\nLa XXX INDÚSTRIA DE MÁQUINAS LTDA, fue fundada en 1970, y sé a convertido en la más importante y tradicional fábrica de MÁQUINAS ENSACADORAS en Brasil.";
        break;
}

file_put_contents("versao.txt", $conteudo);

echo nl2br(file_get_contents("versao.txt"));

echo '<br><br><a href="limpar_cookie.php">Escolher outro idioma</a>';
?>