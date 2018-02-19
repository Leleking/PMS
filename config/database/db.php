<?php
define('DB_HOST','localhost');
define('DB_USERNAME','pms');
define('DB_PASSWORD','pms123');
define('DB_DATABASE','pms');

$conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("There is a problem with the database connection".mysqli_connect_error());
