<?php
define('DB_HOST','localhost');
define('DB_USERNAME','pms');
define('DB_PASSWORD','zsI0b74Z92ISLW81');
define('DB_DATABASE','pms');

$conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("There is a problem with the database connection".mysqli_connect_error());
