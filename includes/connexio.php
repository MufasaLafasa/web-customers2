<?php
global $conn;
function obrirConnexioBD() {
    global $conn;
    $servername = "localhost";
    $username = "root";
    $password = "qwerty1234";
    $dbname = "pakito";

    // Crear connexió
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Error de connexió: " . $conn->connect_error);
    }
}

function tancarConnexioBD() {
    global $conn;
    $conn->close();
}
?>
