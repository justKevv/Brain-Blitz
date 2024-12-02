<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Brain Blitz</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-white">
    <header class="bg-white border-gray-200">
        <nav class="px-4 py-3">
            <div class="max-w-screen-xl flex items-center justify-between mx-auto">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-oren">Brain Blitz</span>
                </a>
                <div class="h-8 w-px bg-gelap-100 mx-4"></div>
                <div class="flex space-x-10 text-lg" id="navbar-cta">
                    <a href="#" class="text-gelap-200 hover:text-midnight">Beranda</a>
                    <a href="#" class="text-gelap-200 hover:text-midnight">Try Out</a>
                    <a href="#" class="text-gelap-200 hover:text-midnight">Paket Try Out</a>
                    <a href="#" class="text-gelap-200 hover:text-midnight">Tanya Blitz</a>
                    <div class="relative">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center text-gelap-200 hover:text-midnight focus:outline-none">
                            Info Lainnya
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg w-44 border-gray-100 absolute top-full left-0 mt-2 shadow-lg">
                            <ul class="py-2 text-lg text-gelap-200">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-midnight">Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-midnight">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-md px-4 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}"
                        class="text-midnight bg-white border border-gelap-100 hover:bg-midnight hover:text-white focus:ring-4 focus:ring-gray-300 focus:outline-none font-medium rounded-full text-lg px-6 py-2 text-center transition-all duration-300">
                        Masuk
                    </a>
                    @endauth
                    <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center md:hidden p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-cta" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="w-full mx-auto max-w-screen-2xl p-8 font-sans">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-16">
                <!-- Bagian Kiri: Teks -->
                <div class="flex flex-col text-center lg:text-left w-full lg:w-1/2">
                    <h1 class="text-[54px] font-semibold text-gelap-300 leading-tight">
                        Raih SNBT-UTBK 2024 dengan Try Out Online
                    </h1>
                    <h2 class="text-[54px] font-semibold text-oren mt-4 mb-4">Brain Blitz</h2>
                    <p class="text-[18px] text-gelap-200 font-regular mt-4 mb-4">
                        Uji dirimu dengan soal-soal HOTS dan try out GRATIS & saatnya perbesar peluang lolosmu masuk PTN!
                    </p>
                    <button class="text-white bg-midnight hover:bg-white border hover:border-gelap-100 hover:text-midnight focus:ring-4 focus:ring-gray-300 focus:outline-none font-regular rounded-full text-lg px-4 py-2 text-center transition-all duration-300">
                        Try Out Sekarang!
                    </button>

                </div>

                <!-- Bagian Kanan: Ilustrasi -->
                <div class="relative flex justify-center items-center w-full lg:w-1/2">
                    <!-- Backdrop Blur -->
                    <!-- <div class="absolute inset-0 w-[600px] h-[600px] bg-oren/40 blur-4xl rounded-full -z-10"></div> -->
                    <img src="{{ asset('images/illustrasi1.png') }}" alt="3D illustration" class="w-[90%] lg:w-[80%]">
                </div>
            </div>
        </div>
    </main>

</body>

</html>