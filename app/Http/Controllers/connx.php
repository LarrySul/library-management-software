<?php
$DB_HOST= "localhost";
$DB_DATABASE= "library";
$DB_USERNAME= "root";
$DB_PASSWORD= "";

$db_conx = mysqli_connect($DB_HOST,$DB_DATABASE,$DB_USERNAME,$DB_PASSWORD);

if (mysqli_connect_errno()) {
	 echo mysqli_connect_error();
	}
?>