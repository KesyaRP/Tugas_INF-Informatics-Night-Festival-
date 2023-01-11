<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFEST</title>
    <!-- Tailwind -->
    <link rel="shortcut icon" href="INF.PNG" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- Navigation Bar - Fixed -->
    <nav class="w-full flex justify-around items-center">
        <a href="#" class="logo">
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
                <h1 class="md:text-4xl font-bold text-center">TERIMA KASIH <br>TELAH MEMBELI TIKET INF 2022</h1>
                <br>
                    <div class="md:text-lg text-md">
                        <h2 class="font-medium text-center">Admin akan Mengkonfirmasi melalui Whatsapp paling lambat 1x24 jam</h2>
                    </div>
                </div>
    </section>
    
</body>


</html>
