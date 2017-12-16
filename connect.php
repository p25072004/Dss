<?php
$dbhost = '10.129.45.137';
$dbuser = 'root';
$dbpass = 'roottoor';
$dbname = 'motorcycle';

$conn = @mysql_connect($dbhost, $dbuser, $dbpass) ;



@mysql_query("SET NAMES 'UTF8'");
@mysql_select_db($dbname);


/* 建立SQL statement */




?>