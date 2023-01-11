<?php   

include 'connect.php';
$nik = $_GET['nik'];
if(isset($nik)){
	$delete = mysqli_query($kon, "DELETE FROM pembayaran WHERE NIK = '$nik' ");
	if($delete){
	header('location:haladmin.php');
	}
}
?>