<?php



/** CONFIG MAC EN LOCAL */

define("DB_HOST", "localhost");

define("DB_PORT", 8889);

define("DB_USER", "root");

define("DB_PASS", "root");

define("DB_NAME", "dataset_vitamin");

function connect_to_db()
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}