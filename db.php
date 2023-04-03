
<?php
function dbconnect() {
    $db = "testdb";
    $host = "localhost";
    $user = "root";
    $pass = "password";

    return new mysqli($host, $user, $pass, $db);
}
function insertMessage($_POST) {
    $txtName = $post['txtName'];
}

$conn = dbconnect();

$query = "insert into messages(message) values (NULL, '$txtName')";

$res = $conn->query($query);
$conn->close();


function printMessages() {
    $conn = dbconnect();
    $query = "select * from messages";
    $res = $conn->query($sql);

    if($res->num_rows > 0) {
        echo"<table>";
        
    }
    $conn->close();


}
?>