<?php

$host = $_ENV['PGHOST'];
$db = $_ENV['PGDATABASE'];
$user = $_ENV['PGUSER'];
$password = $_ENV['PGPASSWORD'];

$connection_string = "host=" . $host . " dbname=" . $db . " user=" . $user . " password=" . $password . "' sslmode=require";

$dbconn = pg_connect($connection_string);

if (!$dbconn) {
    die("Connection failed: " . pg_last_error());
}
echo "Connected successfully";