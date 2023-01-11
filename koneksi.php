<?php
$db_host	= "localhost";
$db_user	="root";
$db_pass	="milkitakesya";
db_name		="tiketfest";

$kon	= mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(!$kon){
die("koneksi gagal");
}