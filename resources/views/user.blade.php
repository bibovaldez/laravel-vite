<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500&family=Poppins:wght@800&display=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>

    <body class="bg-brown-light">
        <div class="container">
            <div id="topbar" class="bg-green-dark box-content h-4 p-2 flex items-center justify-center space-x-2">
                <svg class="w-7 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1" stroke="white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                </svg>
                <h1 class="text-white text-sm font-glacial font-medium">
                    Smart energy management at your fingertips.
                </h1>
            </div>

            <div id="navbar" class="flex items-center px-16 py-6 left-0">
                <img src="../imgs/400164738_340907181921774_3802870888100654010_n-removebg (1).png" alt="logo"
                    class="w-20" />
                <div id="iKurtyente-Text">
                    <h1 class="font-boldglacial font-bold text-green-light text-3xl ml-1 tracking-normal">
                        iKuryente
                    </h1>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width=".5"
            class="absolute top-0 right-0 mt-32 mr-96 stroke-current animate-updown w-14">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
        </svg>

        <div class="content-center text-center mt-5">
            <div>
                <h1 class="text-blue-light font-extrabold text-7xl font-league tracking-normal">
                    The Smart Electric Meter
                </h1>
                <h2 class="text-green-dark font-extrabold text-6xl font-league tracking-normal -mt-11">
                    for Power-saving companion
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width=".5"
                    class="absolute bottom-0 left-0 stroke-current animate-updown ml-40 w-24 mb-36">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                </svg>

                <p class="text-black-light px-80 font-glacial font-normal text-xl tracking-wider -mt-1 opacity-70">
                    iKuryente is a web application designed for monitoring and controlling
                    purposes, offering a streamlined and intuitive interface for
                    effortless management.
                </p>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width=".5"
                    class="absolute bottom-0 right-0 stroke-current animate-updown mr-48 mb-32 w-20">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                </svg>
                <div id="Get-Started-Button" class="mt-9">
                    <a href="login.html"
                        class="text-center font-boldglacial font-bold text-xl tracking-wide items-center justify-center hover:opacity-80">
                        <button class="text-white-light bg-green-dark rounded-md py-1 px-32 hover:underline">
                            Get Started
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </body>

</html>
