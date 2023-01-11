<?php
$kon = mysqli_connect('localhost','root','milkitakesya','tiketfest');
$link = mysqli_select_db($kon,'tiketfest') or die(mysqli_error());
?>