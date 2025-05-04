<?php

$servername = "localhost";
$username = "root";
$password = "contraseñasql";
$dbname = "bienesraices_crud";

function ConectarDB2(){
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}