<?php

$host = "localhost";
$db = "creators";

$conn = new mysqli($host, SQL_USER, SQL_PASS, $db);
if($conn->connect_error) {
    die("Connection Failed: ".$conn->connect_error);
}

function getCreators($conn) {
    $sql = "SELECT Username, Link FROM USERS";
    return $conn->query($sql);
}
