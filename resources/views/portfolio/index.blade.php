    <!-- Portfolio Section -->
    <section>
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <h2 class="text-center text-3xl font-bold md:text-5xl" data-aos="fade-up" data-aos-duration="1000">
                Portfolio
            </h2>
            <p class="mb-8 mt-4 text-center text-sm text-gray-500 sm:text-base md:mb-12 lg:mb-16" data-aos="fade-up"
                data-aos-duration="1200">
                Explore my projects built with Laravel to empower communities and businesses 🚀
            </p>
            <div class="mx-auto grid justify-items-stretch gap-4 md:grid-cols-2 lg:gap-10">
                <!-- Project 1 -->
                <a href="javascript:void(0);" class="relative flex h-[300px] items-end" data-aos="zoom-in"
                    data-aos-duration="1400" onclick="openModal('stone')">
                    <img src="{{ asset('stone.png') }}" alt="STONE Platform"
                        class="inline-block h-full w-full rounded-lg object-cover" />
                    <div class="absolute bottom-5 left-5 flex flex-col justify-center rounded-lg bg-white px-8 py-4">
                        <p class="text-sm font-medium sm:text-xl">STONE Platform</p>
                    </div>
                </a>

                <!-- Modal for STONE -->
                <div id="modal-stone"
                    class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-75 flex items-center justify-center">
                    <div
                        class="relative bg-white rounded-lg p-8 w-[90%] sm:w-[60%] md:w-[40%] max-h-[90%] overflow-y-auto">
                        <button class="absolute top-4 right-4 text-2xl font-bold text-gray-600"
                            onclick="closeModal('stone')">×</button>
                        <h2 class="text-2xl font-bold mb-4">STONE Platform</h2>
                        <img src="{{ asset('ima1.png') }}" alt="Al-Mutamayiz Platform"
                            class="inline-block h-full w-full rounded-lg object-cover mb-2" />
                        <img src="{{ asset('ima2.png') }}" alt="Al-Mutamayiz Platform"
                            class="inline-block h-full w-full rounded-lg object-cover mb-2" />
                        <img src="{{ asset('ima3.png') }}" alt="Al-Mutamayiz Platform"
                            class="inline-block h-full w-full rounded-lg object-cover mb-2" />
                        <img src="{{ asset('ima4.png') }}" alt="Al-Mutamayiz Platform"
                            class="inline-block h-full w-full rounded-lg object-cover mb-2" />
                        <img src="{{ asset('ima5.png') }}" alt="Al-Mutamayiz Platform"
                            class="inline-block h-full w-full rounded-lg object-cover mb-2" />
                        <img src="{{ asset('ima6.png') }}" alt="Al-Mutamayiz Platform"
                            class="inline-block h-full w-full rounded-lg object-cover mb-2" />
                        <img src="{{ asset('ima7.png') }}" alt="Al-Mutamayiz Platform"
                            class="inline-block h-full w-full rounded-lg object-cover mb-2" />
                        <img src="{{ asset('ima8.png') }}" alt="Al-Mutamayiz Platform" class="text-gray-700 text-base">

                        An integrated electronic platform designed to support young graduates and individuals with
                        limited
                        qualifications. Features include a social media platform for article publishing, task
                        assignment,
                        and supervision modules managed by a team of leaders.
                        </p>
                        <p class="text-gray-700 text-base mt-2">
                            <strong>Technologies:</strong> Laravel, HTML5, CSS3, JavaScript, TailwindCSS<br>
                            <a href="https://github.com/RoshdiRaed/STONE" class="text-blue-600" target="_block">View on
                                GitHub</a>
                        </p>
                    </div>
                </div>

                <!-- Project 2 -->
                <a href="javascript:void(0);" class="relative flex h-[300px] items-end" data-aos="zoom-in"
                    data-aos-duration="1400" data-aos-delay="200" onclick="openModal('mutamayiz')">
                    <img src="{{ asset('muta.png') }}" alt="Al-Mutamayiz Platform"
                        class="inline-block h-full w-full rounded-lg object-cover" />
                    <div class="absolute bottom-5 left-5 flex flex-col justify-center rounded-lg bg-white px-8 py-4">
                        <p class="text-sm font-medium sm:text-xl">Al-Mutamayiz</p>
                    </div>
                </a>

                <!-- Modal for Mutamayiz -->
                <div id="modal-mutamayiz"
                    class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-75 flex items-center justify-center">
                    <div
                        class="relative bg-white rounded-lg p-8 w-[90%] sm:w-[60%] md:w-[40%] max-h-[90%] overflow-y-auto">
                        <button class="absolute top-4 right-4 text-2xl font-bold text-gray-600"
                            onclick="closeModal('mutamayiz')">×</button>
                        <h2 class="text-2xl font-bold mb-4">Al-Mutamayiz Platform</h2>
                        <img src="{{ asset('mutam.png') }}" alt="Al-Mutamayiz Platform"
                            class="inline-block h-full w-full rounded-lg object-cover mb-3" />
                        <img src="{{ asset('image1.png') }}" alt="Al-Mutamayiz Platform"
                            class="inline-block h-full w-full rounded-lg object-cover mb-3" />
                        <img src="{{ asset('image2.png') }}" alt="Al-Mutamayiz Platform"
                            class="inline-block h-full w-full rounded-lg object-cover mb-3" />
                        <img src="{{ asset('image3.png') }}" alt="Al-Mutamayiz Platform"
                            class="inline-block h-full w-full rounded-lg object-cover mb-3" />
                        <img src="{{ asset('image4.png') }}" alt="Al-Mutamayiz Platform"
                            class="inline-block h-full w-full rounded-lg object-cover mb-3" />
                        <p class="text-gray-700 text-base">
                            A comprehensive platform for Al-Mutamayiz Advertising and Media Company, enhancing their
                            online
                            presence and client engagement through robust advertising and media services.
                        </p>
                        <p class="text-gray-700 text-base mt-2">
                            <strong>Technologies:</strong> Laravel, HTML5, CSS3, JavaScript, TailwindCSS<br>
                            <a href="https://mutamayiz.laravel.cloud" class="text-blue-600" target="_block">View
                                Live</a> |
                            <a href="https://github.com/RoshdiRaed/mutamayiz-repo" class="text-blue-600"
                                target="_block">GitHub</a>
                        </p>
                    </div>
                </div>

                <!-- Project 3 -->
                <a href="javascript:void(0);" class="relative flex h-[300px] items-end" data-aos="zoom-in"
                    data-aos-duration="1400" data-aos-delay="400" onclick="openModal('elibrary')">
                    <img src="{{ asset('lib.png') }}" alt="E-library Platform"
                        class="inline-block h-full w-full rounded-lg object-cover" />
                    <div class="absolute bottom-5 left-5 flex flex-col justify-center rounded-lg bg-white px-8 py-4">
                        <p class="text-sm font-medium sm:text-xl">E-library</p>
                    </div>
                </a>

                <!-- Modal for E-library -->
                <div id="modal-elibrary"
                    class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-75 flex items-center justify-center">
                    <div
                        class="relative bg-white rounded-lg p-8 w-[90%] sm:w-[60%] md:w-[40%] max-h-[90%] overflow-y-auto">
                        <button class="absolute top-4 right-4 text-2xl font-bold text-gray-600"
                            onclick="closeModal('elibrary')">×</button>
                        <h2 class="text-2xl font-bold mb-4">E-library Platform</h2>
                        <p class="text-gray-700 text-base">
                            A user-friendly platform built as a graduation project, providing seamless access to
                            educational
                            resources for students and learners.
                        </p>
                        <p class="text-gray-700 text-base mt-2">
                            <strong>Technologies:</strong> Laravel, HTML5, CSS3, JavaScript, Bootstrap
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
