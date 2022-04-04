<?php
$databaseName = 'DSMITH13_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'dsmith13_writer';
$password = 'TH64p4sydUk7';

$pdo = new PDO($dsn, $username, $password);
?>