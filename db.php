<?php
function dbconnect() {
    $db = "testdb";
    $host = "localhost";
    $user = "root";
    $pass = "password";

    return new mysqli($host, $user, $pass, $db);
}

?>
