<?php

use Framework\Database;
$config = require basePath('config/db.php');
$db = new Database($config);

$listings = $db->query('SELECT * FROM listings LIMIT 6')->fetchAll();

loadview('listings/index', [
    'listings' => $listings
]);

?>