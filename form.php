<?php
include"connect.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFEST</title>
    <!-- Tailwind -->
    <link rel="shortcut icon" href="INF.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- Navigation Bar - Fixed -->
    <nav class="w-full flex justify-around items-center">
        <a href="home.php" class="logo">
            <div class="flex items-center">
                <img src="INF.png" alt="" class="mr-2">
                <h2 id="logo">INFORMATICS NIGHT FESTIVAL</h2>
            </div>
        </a>

        <div id="toggle" onclick="addNav()"><i class="bi bi-list"></i></div>
        <ul class="flex" id="nav-menu">
            <li class="list-none ml-12"><a href="home.php">Home</a></li>
        </ul>
    </nav>
    <div class="relative" id="nav-menu-active" style="transition: 0,7s;">
        <div id="toggle-close" onclick="addNav()"><i class="bi bi-x-lg"></i></div>
        <ul class="flex items-center flex-col justify-self-center">
            <li class="list-none ml-12"><a href="home.php">Home</a></li>
        </ul>
    </div>


<body>
    <section class="grid grid-cols-4 gap-4 w-full h-screen place-items-center py-20 px-50" id="registration">
        <div class="w-full"></div>
        <div class="w-full col-span-2">
            <form action="submit.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="EmeMZxnuBdqvG4q2PEC7gP4ULDmEAyib0aALMvpy">                <h1 class="md:text-5xl font-bold">Informatics Night Fest Ticket Box</h1>
                <div class="flex flex-col lg:flex-row justify-between mt-10">
                    <div class="md:text-lg text-md">
                        <h2 class="font-medium">Selamat Datang di halaman pembelian Ticket INF 2022</h2>
                        <p class="text-gray-500 mt-3">Silahkan mengisi formulir pembelian tiket di bawah ini dengan benar
                        </p>
                    </div>
                </div>
                <hr class="my-10 divider">
                <h1 class="md:text-xl text-md font-semibold">Informasi Pribadi</h1>
                <!-- Input Nama -->
                <h3 class="font-medium mt-5 mb-3">Nama Lengkap*</h3>
                <p class="text-gray-500 mb-3"></p>
                <div class="flex flex-col lg:flex form-nama md:justify-between mt-5">

                    <input type="text" placeholder="Nama Lengkap, Contoh : Roby Ronal Vieri Simajuntak" class="lg:mt-0 mt-3"
                        required id="nama_tim" name="Nama">
                </div>
                <!-- Alamat -->
                <div class="flex flex-col lg:flex-rowform-alamat justify-between mt-5">
                    <h3 class="font-medium">Alamat</h3>
                    <input type="text" placeholder="Alamat" class="lg:mt-0 mt-3" id="domisili" name="Alamat"
                        required>
                </div>
                <!-- NIK -->
                <div class="flex flex-col lg:flex-rowform-alamat justify-between mt-5">
                    <h3 class="font-medium">NIK</h3>
                    <input type="text" placeholder="NIK" class="lg:mt-0 mt-3" id="domisili" name="nik"
                        required>
                </div>
                <!-- CP Tim -->
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 mt-5">
                    <div id="cp-team">
                        <h4 class="font-medium">Contact Person Pribadi</h4>
                        <p class="text-gray-500 mt">Contact Person harus diisi menggunakan Contact Person pribadi</p>
                    </div>
                    <div class="grid grid-rows-2 gap-4">
                        <input type="text" name="CP" id="no_cp" placeholder="No. HP CP" required>

                        <input type="email" name="Email" id="email" placeholder="Email" class=""
                            required>
                    </div>
                    <div class="grid grid-rows-2 gap-4 items-right" ><strong>Jenis Tiket</strong>
                        <select name="Tiket" style="border: 1px solid black;">
                            <option value="Early Entry">Early Entry (Rp. 100.000) </option>
                            <option value="Regular">Regular (Rp. 200.000)</option>
                            <option value="Premium">Premium (Rp. 300.000)</option>
                            <option value="VIP">VIP (Rp. 550.000)</option>
                        </select>
                        


                        
                        
                    </div>
                </div>
                <!-- Input Bukti Bayar -->
                <br><br>
               
                <h1 class="font-medium mt-5 mb-3 ">PEMBAYARAN </h1>
                <p class="text-black-500 mb-1 font-semibold">7925 4014 71 Bank BCA (Boy Boy Geodevandry)</p>
                <p class="text-black-500 mb-3 font-semibold">0895 1792 2162 Dana (Boy Boy Geodevandry)</p>
                <h1 class="font-medium mt-5 mb-3 ">Bukti Pembayaran </h1>
                <p class="text-gray-500 mb-3">Upload bukti bayar untuk lanjut pendaftaran(dalam bentuk .jpg)</p>
                <input type="file" name="bukti" id="bukti_bayar"
                    class="">                      
                </label>
                <button type="submit" name="kirim" id="btn-submit" class="p-3 mt-10 mb-10 w-full rounded-xl">Selanjutnya</button>
            </form>
        </div>
        <div class="w-full"></div>
    </section>
    
</body>


</html>