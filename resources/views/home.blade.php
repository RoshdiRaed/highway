<!DOCTYPE html>
<html lang="en">

@include('head')

<body>
    <!-- Navbar -->
    <section>
        <nav class="font-inter mx-auto h-auto w-full max-w-screen-2xl md:relative md:top-0 rounded-2xl mt-2"
            style="background-color: #111111;" data-aos="fade-down" data-aos-duration="800">
            <div
                class="flex flex-col px-6 py-6 md:flex-row md:items-center md:justify-between md:px-10 md:py-4 xl:px-20">

                <!-- Logo -->
                <a href="/" data-aos="fade-right" data-aos-delay="200">
                    <h1 class="text-2xl font-bold" style="color: #fefefe;">
                        <span style="color: #9118dc;">Rosh</span><span style="color: #7a1fb3">di</span><span
                            style="color: #6911a7;">Dev</span>
                    </h1>
                </a>

                <!-- Mobile Menu Icon -->
                <button id="menu-toggle" class="absolute right-5 md:hidden" data-aos="fade-left" data-aos-delay="200">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.75 12H20.25" stroke="#fefefe" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M3.75 6H20.25" stroke="#fefefe" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M3.75 18H20.25" stroke="#fefefe" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>

                <!-- Navigation Links -->
                <div id="menu"
                    class="hidden mt-14 flex-col space-y-8 md:mt-0 md:flex md:flex-row md:space-x-1 md:space-y-0">
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

                <!-- Auth Buttons -->
                <div id="btn" class="hidden md:flex md:flex-row md:space-x-3">
                    <a href="#contact"
                        class="rounded-lg px-6 py-4 text-gray-300 hover:text-white hover:bg-gray-700 transition-colors duration-300"
                        data-aos="fade-left" data-aos-delay="600">Contact</a>
                    <a class="rounded-lg px-8 py-4 text-center text-white hover:bg-gray-800 transition-colors duration-300"
                        href="https://github.com/RoshdiRaed" style="background-color: #9118dc;" data-aos="fade-left"
                        data-aos-delay="700">GitHub</a>
                </div>
            </div>
        </nav>
    </section>

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
                </div>

                <div class="max-w-3xl flex-1">
                    <!-- Title -->
                    <h1 class="mb-6 text-4xl font-bold text-gray-800 md:text-5xl" data-aos="fade-left"
                        data-aos-duration="1000">
                        Hi, I'm <span class="text-[#673ab7]">Roshdi Khwaiter</span> 👋<br>
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
    <section>
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <h2 class="mx-auto mb-8 max-w-3xl text-center text-3xl font-bold md:mb-12 md:text-5xl lg:mb-16">
                What My Clients Are Saying
            </h2>
            <div class="mb-5 grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 lg:mb-8">
                <div class="grid grid-cols-1 gap-6 rounded-md border border-solid border-gray-300 bg-white p-8 md:p-10"
                    data-aos="fade-up">
                    <div class="flex">
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                    </div>
                    <div class="text-gray-500">
                        "Roshdi delivered an outstanding platform for our company, showcasing professionalism and
                        efficiency.
                        His attention to detail and timely delivery exceeded our expectations."
                    </div>
                    <div class="flex flex-row items-start">
                        <img src="almutamize.svg" alt="Client"
                            class="mr-4 inline-block h-16 w-16 object-cover rounded-full" />
                        <div class="flex flex-col items-start">
                            <h6 class="text-base font-bold">Al-Mutamayiz Team</h6>
                            <p class="text-sm text-gray-500">Advertising & Media</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 rounded-md border border-solid border-gray-300 bg-white p-8 md:p-10"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="flex">
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                    </div>
                    <div class="text-gray-500">
                        "Working with Roshdi was a seamless experience. His ability to understand our needs and
                        translate them
                        into a functional platform was remarkable."
                    </div>
                    <div class="flex flex-row items-start">
                        <img src="developerplus.jpg" alt="Client"
                            class="mr-4 inline-block h-16 w-16 object-cover rounded-full" />
                        <div class="flex flex-col items-start">
                            <h6 class="text-base font-bold">Developer Plus</h6>
                            <p class="text-sm text-gray-500">Tech Team</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 rounded-md border border-solid border-gray-300 bg-white p-8 md:p-10"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="flex">
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                        <img src="{{ asset('star.png') }}" alt="Star"
                            class="mr-1 inline-block w-3.5 flex-none" />
                    </div>
                    <div class="text-gray-500">
                        "Roshdi's platform for graduates is innovative and impactful. His leadership and technical
                        skills make
                        him a top-tier developer."
                    </div>
                    <div class="flex flex-row items-start">
                        <img src="wasla.jpg" alt="Client"
                            class="mr-4 inline-block h-16 w-16 object-cover rounded-full" />
                        <div class="flex flex-col items-start">
                            <h6 class="text-base font-bold">Wasla Training</h6>
                            <p class="text-sm text-gray-500">Training Coordinator</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div id="contact" class="w-full min-h-screen flex items-center justify-center bg-[#000000]"
            data-aos-delay="400">
            <div class="md:w-2/3 w-full px-4 text-white flex flex-col">
                <div class="w-full text-7xl font-bold">
                    <h1 class="w-full md:w-2/3" data-aos="fade-left" data-aos-delay="1000">
                        Let's Build Something Great Together
                    </h1>
                </div>
                <div class="flex mt-8 flex-col md:flex-row md:justify-between">
                    <p class="w-full md:w-2/3 text-gray-400" data-aos="fade-right" data-aos-delay="600">
                        Whether you need a scalable web application, a custom Laravel solution, or a platform to empower
                        your
                        community, I'm here to help. Reach out to discuss your project ideas!
                    </p>
                    <div class="w-44 pt-6 md:pt-0">
                        <a href="mailto:roshdi013@gmail.com"
                            class="bg-[#6911a7] justify-center text-center rounded-lg shadow px-10 py-3 flex items-center">
                            Contact Me
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex mt-24 mb-12 flex-row justify-between">
                        <div class="">
                            <h1 class="hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase">
                                RoshdiDev</h1>
                        </div>
                        <a href="#about"
                            class="hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase">About</a>
                        <a href="#portfolio"
                            class="hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase">Portfolio</a>
                        <a href="#contact"
                            class="hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase">Contact</a>
                    </div>
                    <hr class="border-gray-600" />
                    <p class="w-full text-center my-12 text-gray-600">Copyright © 2025 Roshdi Khwaiter</p>
                </div>
            </div>
        </div>
    </section>

    <!-- AOS JS -->

    <!-- Initialize AOS and Modal Functions -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true,
                mirror: false,
                offset: 120,
                easing: 'ease-out-cubic'
            });
        });

        function openModal(project) {
            document.getElementById(`modal-${project}`).classList.remove('hidden');
        }

        function closeModal(project) {
            document.getElementById(`modal-${project}`).classList.add('hidden');
        }
    </script>
    <script>
        function openModal(id) {
            document.getElementById(`modal-${id}`).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(`modal-${id}`).classList.add('hidden');
        }
    </script>

    <script>
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.querySelectorAll('[id^="modal-"]').forEach(modal => {
                    modal.classList.add('hidden');
                });
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

</body>

</html>
