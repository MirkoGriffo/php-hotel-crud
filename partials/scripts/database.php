<?php

$host = 'localhost';
$username = 'root';
$password = 'root';
$db_hotel = 'hotel';

//apro connessione

$conn = new mysqli($host, $username, $password, $db_hotel);

//var_dump($conn);

//controllo conessione

if ($conn && $conn->connect_error) {
    die("Connection failed: $conn->connect_error");
}
