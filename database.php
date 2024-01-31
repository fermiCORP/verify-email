<?php

$host = "sql11.freesqldatabase.com";
$dbname = "sql11681139";
$username = "sql11681139";
$password = "l4lkJnVZ4J";

$mysqli = new mysqli(hostname: $host,
    username: $username,
    password: $password,
    database: $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;