<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="INF.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.nav-menu-active/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>INFEST</title>
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
            <li class="list-none ml-12"><a href="#showcase">Home</a></li>
            <li class="list-none ml-12"><a href="#detail">Guest Star</a></li>
            <li class="list-none ml-12"><a href="#event">Ticket</a></li>
            <!--<li class="list-none ml-12"><a href="#contact">Contact</a></li> -->
            <li class="list-none ml-12"><a href="#medsos">Social Media</a></li>
        </ul>
    </nav>
    <div class="relative" id="nav-menu-active" style="transition: 0,7s;">
        <div id="toggle-close" onclick="addNav()"><i class="bi bi-x-lg"></i></div>
        <ul class="flex items-center flex-col justify-self-center">
            <li class="list-none ml-12"><a href="#showcase">Home</a></li>
            <li class="list-none ml-12"><a href="#detail">Guest Star</a></li>
            <li class="list-none ml-7"><a href="#event">Ticket</a></li>
            <!--<li class="list-none ml-12"><a href="#contact">Contact</a></li> -->
            <li class="list-none ml-4"><a href="#medsos">Social Media</a></li>
        </ul>
    </div>


    <!-- Header Section - Video Backgorund -->
    <section id="showcase" class="w-full bg-black">
        <div class="text-header text-center sm:ml-0 md:ml-32"></div>
        <video src="inf.mp4" autoplay loop muted></video>
        <div class="overlay"></div>
    </section>

    
    <section id="detail" class="container mx-auto w-3/4">
        <h1 class="font-bold text-xl md:text-3xl text-center">INFORMATICS NIGHT FEST</h1>
        <h1 class="font-bold text-xl md:text-8xl mb-2 text-center">A VISION OF UNITY</h1>
        <h1 class="font-bold text-xl md:text-3xl mb-1 text-center">Another Our Event</h1>
        <h1 class="font-bold text-xl md:text-3xl mb-8 text-center">LEIF | Idea Startup Competition | Charity</h1>
        <h1 class="font-bold text-xl md:text-2xl mt-20 mb-1 text-center">Our Guest Star</h1>
        <div class="container mt-10 md:px-32 grid grid-rows-2 gap-10">
            <div class="grid gap-4 grid-cols-1 lg:grid-cols-2">
                <div class="container rounded-xl  bg-transparent object-cover">
                    <div class="container w-full shadow-xl shadow-slate-200 rounded-xl">
                        <img src="Soegi.png" alt=""
                            class="object-cover rounded-xl">
                    </div>
                </div>
                <div class="lg:place-self-center">
                    <h1 class="font-bold text-xl md:text-2xl mb-5">Soegi Bornean</h1>
                    <p class="font-bold text-l md:text-xl mb-4 text-center"> Hits Song </p>
                    <ul>
                        <div class="grid grid-cols-2">
                            <li>
                                <h5 class="text-lg ">Pijaraya</h5>
                                <p></p>
                            </li>
                            <li>
                                <h5 class="text-lg">Asmalibrasi</h5>
                                <p></p>
                            </li>
                        </div>

                        <div class="grid grid-cols-2 my-3">
                            <li>
                                <h5 class="text-lg">Raksa</h5>
                                <p></p>
                            </li>
                            <li>
                                <h5 class="text-lg">Semenjana</h5>
                                <p></p>
                            </li>
                        </div>

                    </ul>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-4 grid-cols-1">
                <div class="container rounded-xl lg:order-last bg-transparent object-cover">
                    <div class="container w-full shadow-xl shadow-slate-200 rounded-xl">
                        <img src="sid.jpg" alt=""
                            class="object-cover rounded-xl">
                    </div>
                </div>
                <div class="place-self-start md:place-self-center">
                    <h1 class="font-bold text-xl md:text-2xl mb-5">Superman Is Dead</h1>
                    <p class="font-bold text-l md:text-xl mb-4 text-center"> Hits Song </p>
                    <ul>
                        <div class="grid grid-cols-2">
                            <li>
                                <h5 class=" text-lg">Bulan & Ksatria</h5>
                                <p></p>
                            </li>
                            <li>
                                <h5 class=" text-lg ">Kuat Kita Bersinar</h5>
                                <p></p>
                            </li>
                        </div>

                        <div class="grid grid-cols-2 my-3">
                            <li>
                                <h5 class="text-lg">Jadilah Legenda</h5>
                                <p></p>
                            </li>
                            <li>
                                <h5 class="text-lg">Sunset di tanah Anarki</h5>
                                <p></p>
                            </li>
                        </div>
                    </ul>
                </div>
          </div>
          </div>
    </section>

    <!-- Registrasi - Events -->
    <section id="event" class="container w-3/4 mx-auto text-center">
        <h1 class="font-bold text-xl md:text-4xl">Lets Join Our Festival</h1>
        <p class="mt-4 mb-3">On December 17th 2022
            </p>


        <div class="container mt-16 md:px-32 grid grid-cols-1 lg:grid-cols-1 md:gap-4 gap-4 place-items-center">
            <div class="container w-1/2 h-max bg-slate-500 flex flex-col items " id="event-card-ml">
                <h2 class="justify-self-start mt-10" id="card-title">
                    Our Ticket
                </h2>
                <div class="card-content mx-10 mt-32 mb-32">
                </div>
                <a href="form.php" class="btn-register justify-self-end flex items-center justify-center">
                    Buy
                </a>
            </div>
        </div>
        -->
    </section>
    

    

    <section id="contact" class="container w-3/4 mx-auto text-center">
        
        <div class="text-contact">
            <h1 class="font-bold text-xl md:text-4xl ">Contact Person</h1>
            <p class="mt-4 mb-10">Untuk pertanyaan dan informasi lainnya dapat ditanyakan melalui contact person
                berikut
            </p>
            
        </div>

        <div class="grid grid-rows lg:grid-cols-2 gap-4 place-items-center">

            <a href="https://wa.me/6281350396429"
                class="btn-contact font-bold text-lg md:text-xl mb-5 lg:place-self-end" target="_blank"><i
                    class="bi bi-whatsapp mr-3"></i>BOY BOY</a>

            
            <a href="https://wa.me/6289668341683"
                class="btn-contact font-bold text-lg md:text-xl mb-5 lg:place-self-start" target="_blank"><i
                    class="bi bi-whatsapp mr-3"></i>ROBY RONAL</a>
            
        </div>
        <div class="grid grid-rows lg: grid-cols-1  place-items-center">
            <a href="https://wa.me/6289693794004"
                class="btn-contact font-bold text-lg md:text-xl mb-5 lg: place-self-center" target="_blank "><i
                    class="bi bi-whatsapp mr-3"></i>KESYA RAMITA</a>
        </div>

    </section>
    
    <section id="medsos" class="container w-3/4 mx-auto text-center">
        
        <div class="text-medsos">
            <h1 class="font-bold px-4 text-xl md:text-2xl mt-40">Our Social Media</h1>
            <p class="mt-4 mb-3">Untuk berbagai informasi tentang Informatics Night Festival dapat dilihat pada Media Sosial kami
            </p>
            
        </div>

        <div class="grid grid-rows lg:grid-cols-2 gap-4 place-items-center">

            <a href="https://www.instagram.com/informershmif/"
                class="btn-medsos font-medium text-lg md:text-xl mb-5 lg:place-self-end" target="_blank">
                <i class="bi bi-instagram mr-3"></i>INSTAGRAM</a>

            
            <a href="https://www.youtube.com/@informatikauntan5928"
                class="btn-medsos font-medium text-lg md:text-xl mb-5 lg:place-self-start" target="_blank"><i
                    class="bi bi-youtube mr-3"></i>YOUTUBE</a>

        </div>

    </section>

    <footer class="w-full flex items-center justify-center">
        <img src="INF.png" alt="" style="width:8em;">
        <div id="footer-text">
            <h2>INFORMATICS NIGHT FESTIVAL</h2>
            <h2>LETS JOIN OUR FESTIVAL</h2>
        </div>

    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
    
        var toggleButton = document.getElementById("toggle");
        var navMenu = document.getElementById("nav-menu-active");

        function addNav() {
            if (navMenu.classList.contains("nav-small")) {
                navMenu.classList.remove("nav-small");
                navMenu.style.left = "3000px";
                console.log("add nav-small");
            } else {
                console.log("remove nav-small");
                navMenu.style.left = "150px";
                navMenu.classList.add("nav-small");
            }
        }
    </script>
</body>

</html>
