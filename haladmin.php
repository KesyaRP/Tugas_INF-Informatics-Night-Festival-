<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Admin INF 2022</title>
    <link rel="shortcut icon" href="INF.ico" type="image/x-icon">
    <style>
        .table-hover tbody tr:hover td,
        .table-hover tbody tr:hover th {
            background-color: white;
        }
        .mid{
            margin: auto;
            width: 800px;
        }
        .mid h1{
            text-align: center;
        }
    </style>
</head>
<header>
</header>
<body>
    <div class="mid">
        <h1>DAFTAR PEMBELIAN TIKET</h1>
        <?php 
        $sql = "SELECT * FROM pembayaran";

        echo"<table class='table table-bordered table-hover' style='color: black;'>";
        echo"<tr class='table-dark'>
        <th scope='col'>NAMA</th>
        <th scope='col'>ALAMAT</th>
        <th scope='col'>NIK</th>
        <th scope='col'>NO. HP</th>
        <th scope='col'>EMAIL</th>
        <th scope='col'>TIKET</th>
        <th scope='col'>BUKTI PEMBAYARAN</th>
        <th scope='col'>HAPUS</th>
        <th scope='col'>Tiket</th>


        </tr>";
        if ($result = mysqli_query($kon, $sql)) {
            while($data=mysqli_fetch_array($result)){
            ?>
            <tr class="text-center" style="background-color: lightgrey;" >
                <td><?php echo $data['Nama'] ?></td>
                <td><?php echo $data['Alamat'] ?></td>                
                <td><?php echo $data['NIK'] ?></td>
                <td><?php echo $data['CP'] ?></td>
                <td><?php echo $data['Email'] ?></td>
                <td><?php echo $data['Tiket'] ?></td>
                <td><?php echo"<img src='bukti/$data[Bukti_Pembayaran]' width='100px' /"?> ></td>
                <td> <a href="delete.php?nik=<?php echo $data['NIK'] ;?>" class="btn btn-danger">Hapus</a> </td>
                <td><a href="https://wa.me//<?php echo $data[CP];?>" class="btn btn-danger">Kirim</a></td>
                </td> 
            </tr>
            <?php }}?>
        </table><br><br>
        <button class= ' btn btn-primary position relative'><a href ='logout.php' style="color: white; text-decoration: none;" >Logout</a></button>
    </div>


</body>

</html>