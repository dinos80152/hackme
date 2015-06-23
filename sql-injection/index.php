<?php

include( __DIR__ . '/../env.php');

$id = $_GET['id'];

$dbConn = "mysql:host=". $_ENV['db_host'] . ";dbname=" . $_ENV['db_name'];

$dbh = new PDO($dbConn, $_ENV['db_user'], $_ENV['db_pass']);

$stmt = $dbh->prepare("SELECT * FROM sql_injection WHERE id = {$id}");

$stmt->execute();

foreach($stmt->fetchAll() as $row) {
    print_r ($row);
}