<?php 

define('SERVER_NAME','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','freepro');

$connection = mysqli_connect(SERVER_NAME,DB_USER,DB_PASSWORD,DB_NAME);


if(!$connection){
    die('Connection to DB Failed'.mysql_error());
}