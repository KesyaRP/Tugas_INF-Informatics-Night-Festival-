<?php
    include 'connect.php';

if (isset($_POST['kirim'])) {
    $nama       = $_POST['Nama'];
    $alamat       = $_POST['Alamat'];
    $nik       = $_POST['nik'];
    $cp      = $_POST['CP'];
    $email      = $_POST['Email'];
    $tiket      = $_POST['Tiket'];
    $bukti      = $_FILES['bukti']['name'];
    $path = $_FILES['bukti']['tmp_name'];
    move_uploaded_file($path, 'bukti/' .$bukti);

    mysqli_query($kon, "INSERT INTO pembayaran (Nama,Alamat,NIK,CP,Email,Tiket, Bukti_Pembayaran) VALUES ('$nama','$alamat','$nik','$cp','$email','$tiket','$bukti')");

    header('Location: thanks.php');
}