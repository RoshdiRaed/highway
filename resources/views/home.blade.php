<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoshdiDev Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-inter bg-gray-100">
    <!-- Navbar -->
    <nav class="font-inter mx-auto h-auto w-full max-w-screen-2xl px-6 py-6 md:px-10 md:py-4 xl:px-20 rounded-2xl mt-2"
    style="background-color: #111111;" data-aos="fade-down" data-aos-duration="800">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <!-- Logo and Mobile Toggle -->
        <div class="flex items-center justify-between">
            <a href="/" class="text-2xl font-bold text-[#fefefe]" data-aos="fade-right" data-aos-delay="200">
                <span class="text-[#9118dc]">Rosh</span><span class="text-[#7a1fb3]">di</span><span
                    class="text-[#6911a7]">Dev</span>
            </a>
            <!-- Mobile Menu Icon -->
            <button id="menu-toggle" class="md:hidden text-[#fefefe]" data-aos="fade-left" data-aos-delay="200">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.75 12H20.25" stroke="#fefefe" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M3.75 6H20.25" stroke="#fefefe" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M3.75 18H20.25" stroke="#fefefe" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation Links (Desktop) -->
        <div id="menu"
            class="hidden md:flex md:flex-row md:items-center md:space-x-1">
            <a href="#home"
                class="rounded-lg md:px-6 md:py-4 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors duration-300"
                data-aos="fade-down" data-aos-delay="300">Home</a>
            <a href="#about"
                class="rounded-lg md:px-6 md:py-4 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors duration-300"
                data-aos="fade-down" data-aos-delay="400">About</a>
            <a href="#contact"
                class="rounded-lg md:px-6 md:py-4 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors duration-300"
                data-aos="fade-down" data-aos-delay="500">Contact Me</a>
        </div>

        <!-- Auth Buttons (Desktop) -->
        <div id="btn" class="hidden md:flex md:flex-row md:space-x-3">
            <a href="#contact"
                class="rounded-lg px-6 py-4 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors duration-300"
                data-aos="fade-left" data-aos-delay="600">Contact</a>
            <a href="https://github.com/RoshdiRaed"
                class="rounded-lg px-8 py-4 text-white hover:bg-gray-800 transition-colors duration-300"
                style="background-color: #9118dc;" data-aos="fade-left" data-aos-delay="700">GitHub</a>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden flex-col space-y-4 mt-4 md:hidden">
            <a href="#home"
                class="text-gray-300 hover:text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-300">Home</a>
            <a href="#about"
                class="text-gray-300 hover:text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-300">About</a>
            <a href="#contact"
                class="text-gray-300 hover:text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-300">Contact Me</a>
            <a href="#contact"
                class="text-gray-300 hover:text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors duration-300">Contact</a>
            <a href="https://github.com/RoshdiRaed"
                class="bg-[#9118dc] text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition-colors duration-300">GitHub</a>
        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>

    <!-- Header -->
    <header id="home">
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-8 md:py-20">
            <div class="flex flex-col-reverse md:flex-row items-center gap-8 sm:gap-16">
                <!-- Image -->
                <div class="relative flex-1 group">
                    <img src="{{ asset('my.png') }}" data-aos="zoom-in" data-aos-duration="600"
                        alt="Portfolio Briefcase"
                        class="h-full w-full rounded-xl object-cover shadow-xl transition-all duration-500 ease-in-out group-hover:brightness-110"
                        style="object-fit: cover;" />
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent to-black rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div
                        class="absolute inset-0 flex flex-col justify-end p-6 text-purple-800 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h2 class="text-3xl font-bold tracking-wide drop-shadow-lg">Creative Vision</h2>
                        <p class="text-lg font-semibold mt-2 drop-shadow-md">Designing impactful solutions with passion.
                        </p>
                    </div>
                <div
                    class="absolute bottom-0 right-0 bg-white bg-opacity-20 backdrop-blur-md rounded-tl-xl p-4 shadow-lg transition-transform transform group-hover:translate-y-2 group-hover:translate-x-2">
                    <p class="text-sm text-white font-semibold">Innovative Designs</p>
                </div>
                </div>

                <div class="max-w-3xl flex-1">
                    <!-- Title -->
                    <h1 class="mb-6 text-4xl font-bold text-gray-800 md:text-5xl" data-aos="fade-left"
                        data-aos-duration="1000">
                        Hi, I'm <span class="text-[#673ab7]">Roshdi Khwaiter</span>
                        <hr class="my-4 border-t-2 border-gray-300">
                        A <span class="text-[#e53935]">Laravel Developer</span> passionate about building <span
                            class="text-[#4caf50]">impactful solutions</span>.
                    </h1>
                    <p class="mb-8 text-gray-600 sm:text-lg" data-aos="fade-left" data-aos-duration="1200"
                        data-aos-delay="200">
                        Let's create something amazing together 🚀.
                    </p>
                    <div class="flex items-center" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="400">
                        <a href="#contact"
                            class="mr-4 bg-[#673ab7] text-white px-6 py-3 rounded-lg shadow hover:bg-[#5e35b1] transition">
                            Get in Touch
                        </a>
                        <a href="https://github.com/RoshdiRaed" class="text-[#673ab7] font-semibold hover:underline">
                            View My Work
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- About Section -->
    <section id="about">
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <h2 class="mb-8 text-3xl font-bold md:text-5xl md:mb-10" data-aos="fade-up" data-aos-duration="1000">
                About Roshdi
            </h2>
            <p class="mb-8 max-w-lg text-sm text-gray-500 sm:text-base md:mb-16" data-aos="fade-up"
                data-aos-duration="1200">
                I'm a dedicated Laravel developer with a passion for creating impactful web solutions and empowering
                young
                professionals through technology.
            </p>
            <div class="grid gap-8 md:grid-cols-2 md:gap-10">
                <img src="{{ asset('about-me.png') }}" alt="Roshdi at work"
                    class="inline-block h-full w-full rounded-2xl object-cover" data-aos="zoom-in"
                    data-aos-duration="1400" />

                <div class="flex flex-col gap-5 rounded-2xl border border-solid border-black p-10 sm:p-12"
                    data-aos="fade-left" data-aos-duration="1600">
                    <h2 class="text-3xl font-bold md:text-5xl" data-aos="fade-up">
                        My Mission
                    </h2>
                    <p class="text-sm text-gray-500 sm:text-base" data-aos="fade-up" data-aos-delay="200">
                        My mission is to empower young graduates and individuals with limited qualifications by building
                        platforms that provide practical, task-based learning opportunities. I aim to create scalable,
                        user-friendly applications that solve real-world problems while fostering collaboration and
                        growth.
                        <br /><br />
                        With a strong foundation in Laravel and web development, I focus on delivering innovative
                        solutions
                        that enhance accessibility and engagement for all users.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('portfolio.index')

    <!-- Clients Section -->
    <section class="py-12 px-4 md:px-8 md:py-16">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl md:text-4xl font-bold text-center mb-6 md:mb-8" data-aos="fade-up">What My Clients Are
                Saying</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="border border-gray-300 bg-white p-6 rounded-md" data-aos="fade-up">
                    <div class="flex mb-4">
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                    </div>
                    <p class="text-gray-500 text-sm mb-4">"Roshdi delivered an outstanding platform for our company,
                        showcasing professionalism and efficiency. His attention to detail and timely delivery exceeded
                        our expectations."</p>
                    <div class="flex items-center">
                        <img src="almutamize.svg" alt="Client" class="w-12 h-12 rounded-full mr-4" />
                        <div>
                            <h6 class="text-sm font-bold">Al-Mutamayiz Team</h6>
                            <p class="text-xs text-gray-500">Advertising & Media</p>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-300 bg-white p-6 rounded-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex mb-4">
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                    </div>
                    <p class="text-gray-500 text-sm mb-4">"Working with Roshdi was a seamless experience. His ability
                        to understand our needs and translate them into a functional platform was remarkable."</p>
                    <div class="flex items-center">
                        <img src="developerplus.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4" />
                        <div>
                            <h6 class="text-sm font-bold">Developer Plus</h6>
                            <p class="text-xs text-gray-500">Tech Team</p>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-300 bg-white p-6 rounded-md" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex mb-4">
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                        <img src="{{ asset('star.png') }}" alt="Star" class="w-4 h-4 mr-1" />
                    </div>
                    <p class="text-gray-500 text-sm mb-4">"Roshdi's platform for graduates is innovative and impactful.
                        His leadership and technical skills make him a top-tier developer."</p>
                    <div class="flex items-center">
                        <img src="wasla.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4" />
                        <div>
                            <h6 class="text-sm font-bold">Wasla Training</h6>
                            <p class="text-xs text-gray-500">Training Coordinator</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-[#000000] py-12 px-4 flex items-center justify-center min-h-screen">
        <div class="max-w-3xl text-white">
            <h1 class="text-3xl md:text-5xl font-bold mb-6" data-aos="fade-left" data-aos-delay="1000">Let's Build
                Something Great Together</h1>
            <p class="text-gray-400 mb-6 text-sm md:text-base" data-aos="fade-right" data-aos-delay="600">
                Whether you need a scalable web application, a custom Laravel solution, or a platform to empower your
                community, I'm here to help.
            </p>
            <a href="mailto:roshdi013@gmail.com" class="bg-[#6911a7] text-white px-6 py-3 rounded-lg inline-block"
                data-aos="fade-up" data-aos-delay="800">Contact Me</a>
            <div class="mt-12">
                <hr class="border-gray-600 mb-6" />
                <p class="text-center text-gray-600 text-sm">Copyright © 2025 Roshdi Khwaiter</p>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true,
                mirror: false,
                offset: 100,
                easing: 'ease-out-cubic',
                duration: 600
            });

            // Mobile Menu Toggle
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        });

        function openModal(id) {
            document.getElementById(`modal-${id}`).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(`modal-${id}`).classList.add('hidden');
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.querySelectorAll('[id^="modal-"]').forEach(modal => {
                    modal.classList.add('hidden');
                });
            }
        });
    </script>
</body>

</html>
