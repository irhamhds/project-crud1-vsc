<?php
$host = 'localhost';
$db = 'informatika' ;
$usr ='root';
$pwd ='';

// paramater = hostname, username, password, database
$conn =mysqli_connect($host, $usr, $pwd, $db); //true|false

if(!$conn){
    die("Gagal  terhubung dengan database: ". mysqli_connect_error());
}
?>