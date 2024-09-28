<?php
if (isset($_GET['lang'])) {
    $idioma = $_GET['lang'];
    
    setcookie("idioma", $idioma, time() + (3 * 24 * 60 * 60));
    
    header("Location: index.php");
    exit;
}
?>