<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
$factory = (new Factory()) -> withDatabaseUri('https://coqueiral-10fe9-default-rtdb.firebaseio.com/');

$database = $factory -> createDatabase();
?>