<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take A Trip - Medellin PickUp Service</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="src/css/estilos.css">
    <link href='https://cdn.boxicons.com/3.0.3/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <main class="bgMain after:backdrop-blur-[4px] border-b border-[#262626] px-[1rem] md:px-0">
        <section class="grid md:grid-cols-2 contenedor h-fit relative z-10">
            <div class="relative md:top-[60%]">
                <h1 class="text-[5.5rem] text-white leading-[1.2] font-bold">Travel. Arrive. <span class="">Relax.</span></h1>
                <h3 class="text-[2rem] text-white">Smart rides for modern travelers.</h3>
            </div>

            <div>
                <div class="bg-[#070707] rounded-lg px-[2rem] py-[2rem] w-[400px] md:mx-auto relative md:top-[35%] border border-[#262626] shadow-lg">
                    <h4 class="text-gray-500 text-[.9rem]">Your Route</h4>

                    <form action="" class="w-full mt-[.5rem]">
                        <input id="pickup" type="text" placeholder="From (airport, port, address)" class="border border-[#262626] w-full rounded-t-lg px-[1rem] py-[.7rem] text-white" />
                        <input id="dropoff" type="text" placeholder="To (airport, port, address)" class="border-b border-r border-l border-[#262626] w-full rounded-b-lg px-[1rem] py-[.7rem] text-white" />


                        <div class="grid grid-cols-2 gap-[1rem] mt-[1rem]">
                            <div class="">
                                <span class="text-[.9rem] text-white">Pick-up Date</span>
                                <input id="pickupDate" type="date" placeholder="Pick-up Date" class="border border-[#262626] w-full rounded-lg px-[1rem] py-[.7rem] mt-[.5rem] text-white" />
                            </div>

                            <div class="">
                                <span class="text-[.9rem] text-white">Pick-up Time</span>
                                <input id="pickupTime" type="time" placeholder="Pick-up Time" class="border border-[#262626] w-full rounded-lg px-[1rem] py-[.7rem] mt-[.5rem] text-white" />
                            </div>
                        </div>


                        <div class="grid grid-cols-2 gap-[1rem] mt-[1rem]">
                            <div class="">
                                <span class="text-[.9rem] text-white">Passengers</span>
                                <input id="passengers" type="number" placeholder="Number of passengers" class="border border-[#262626] w-full rounded-lg px-[1rem] py-[.7rem] mt-[.5rem] text-white" min="1" max="7" />
                            </div>

                            <div class="">
                                <span class="text-[.9rem] text-white">Luggage pieces</span>
                                <input id="luggagePieces" type="number" placeholder="Number of luggage pieces" class="border border-[#262626] w-full rounded-lg px-[1rem] py-[.7rem] mt-[.5rem] text-white" min="0" />
                            </div>
                        </div>

                        <a href="#" class="block text-center bg-[#091F36] bg-[#004AAD!important] text-white rounded-lg px-[1rem] py-[.7rem] mt-[1rem]">Continue</a>

                    </form>
                </div>
            </div>

        </section>
    </main>

    <section class="bg-[#070707] pt-8 pb-[5rem] grid md:grid-cols-3 gap-[2rem] contenedor md:mt-[-3rem!important] relative z-20 md:px-[3rem] rounded-lg shadow-lg border border-[#262626] header px-[1rem]">
        <div>
            <div class="h-[218px]">
                <img src="src/images/airport1.jpg" alt="" class="w-[400px] rounded-lg h-full object-cover">
            </div>
            <h3 class="text-[1.6rem] mt-[1.5rem] text-white">Seamless airport pickups</h3>
            <p class="text-[1.05rem] mt-[.5rem] text-white">Your smooth start in Medellín begins here.</p>

            <div class="flex items-center mt-[1rem] gap-[1.5rem]">
                <a href="#" class="bg-[#091F36] text-white font-semibold px-[1rem] py-[.5rem] rounded-lg mt-[.5rem] inline-block">Book</a>
                <a href="#" class="text-[#004AAD] mt-[.5rem] inline-block">Learn more</a>

            </div>

        </div>

        <div>
            <div class="h-[218px]">
                <img src="src/images/pickup.jpg" alt="" class="w-[400px] h-full object-cover rounded-lg">
            </div>
            <h3 class="text-[1.6rem] mt-[1.5rem] text-white">Comfortable rides.</h3>
            <p class="text-[1.05rem] mt-[.5rem] text-white">Experience the best of Medellín with our premium services.</p>

            <div class="flex items-center mt-[1rem] gap-[1.5rem]">
                <a href="#" class="bg-[#091F36] text-white font-semibold px-[1rem] py-[.5rem] rounded-lg mt-[.5rem] inline-block">Book</a>
                <a href="#" class="text-[#004AAD] mt-[.5rem] inline-block">Learn more</a>
            </div>

        </div>

        <div>
            <div class="h-[218px]">
                <img src="src/images/passenger.jpg" alt="" class="w-[400px] h-full object-cover rounded-lg">
            </div>
            <h3 class="text-[1.6rem] mt-[1.5rem] text-white">Explore Medellín.</h3>
            <p class="text-[1.05rem] mt-[.5rem] text-white">Get insider tips and discover hidden gems.</p>

            <div class="flex items-center mt-[1rem] gap-[1.5rem]">
                <a href="#" class="bg-[#091F36] text-white font-semibold px-[1rem] py-[.5rem] rounded-lg mt-[.5rem] inline-block">Book</a>
                <a href="#" class="text-[#004AAD] mt-[.5rem] inline-block">Learn more</a>
            </div>

        </div>
    </section>


    <!--==================== About Us Section====================
    ================================================================ -->

    <section class="relative px-4 overflow-hidden py-[7rem]">
        <!-- Animated background elements -->
        <!-- <div class="absolute inset-0 opacity-5">
            <div class="absolute top-1/4 right-1/4 w-[500px] h-[500px] bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 left-1/4 w-[500px] h-[500px] bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse delay-1000"></div>
        </div> -->

        <div class="contenedor mx-auto relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- Left Side - Images with Creative Layout -->
                <div class="relative h-[600px] flex items-center justify-center">
                    <!-- Main Image Card -->
                    <div class="relative w-full max-w-[500px] group">
                        <!-- <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-2xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div> -->
                        <div class="relative bg-gradient-to-br from-gray-800/50 to-gray-900/50 backdrop-blur-sm border border-gray-700 rounded-2xl p-2 hover:border-blue-500/50 transition-all duration-500 hover:scale-[1.02]">
                            <img
                                src="src/images/pickup.jpg"
                                alt="Professional transportation service"
                                class="rounded-xl w-full h-[450px] object-cover shadow-2xl">
                        </div>
                    </div>

                    <!-- Floating Secondary Image -->
                    <div class="absolute top-0 -right-8 w-[280px] hidden lg:block group">
                        <!-- <div class="absolute inset-0 bg-gradient-to-br from-cyan-600 to-blue-500 rounded-2xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div> -->
                        <div class="relative bg-gradient-to-br from-gray-800/80 to-gray-900/80 backdrop-blur-sm border border-gray-700 rounded-2xl p-2 hover:border-cyan-500/50 transition-all duration-500 hover:scale-105 hover:-rotate-2">
                            <img
                                src="src/images/passenger.jpg"
                                alt="Comfortable rides"
                                class="rounded-xl w-full h-[320px] object-cover shadow-2xl">
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="absolute bottom-8 -left-4 bg-gray-800/90 backdrop-blur-md border border-gray-700 rounded-xl p-4 shadow-2xl hover:scale-105 transition-transform duration-300">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-white">+208</p>
                                <p class="text-xs text-gray-400">Happy Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute bottom-8 -right-4 bg-gray-800/90 backdrop-blur-md border border-gray-700 rounded-xl p-4 shadow-2xl hover:scale-105 transition-transform duration-300 hidden lg:block">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-white">100%</p>
                                <p class="text-xs text-gray-400">Satisfaction</p>
                            </div>
                        </div>
                    </div>

                    <!-- Decorative Elements -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-blue-500/10 rounded-full pointer-events-none animate-spin-slow"></div>
                </div>

                <!-- Right Side - Content -->
                <div class="space-y-8">
                    <!-- Section Badge -->
                    <div class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/30 rounded-full px-4 py-2">
                        <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-blue-400 text-sm font-medium">Trusted by 200+ customers</span>
                    </div>

                    <!-- Main Heading -->
                    <div>
                        <h2 class="text-[3rem] font-bold text-white mb-4 leading-tight">
                            Your Trusted <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">Transportation</span> Partner
                        </h2>
                        <p class="text-xl text-gray-300 font-medium">
                            Smart rides for modern travelers across Medellín
                        </p>
                    </div>

                    <!-- Description -->
                    <p class="text-gray-400 text-lg leading-relaxed">
                        Since our inception, we've been committed to providing safe, reliable, and comfortable transportation services throughout Medellín. Our professional drivers and premium fleet ensure every journey is smooth, punctual, and stress-free.
                    </p>

                    <!-- Features Grid -->
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="flex items-start gap-3 group">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center group-hover:bg-blue-500 transition-colors duration-300">
                                <svg class="w-5 h-5 text-blue-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Licensed & Insured</h4>
                                <p class="text-gray-500 text-sm">All drivers fully certified and insured for your safety</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 group">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center group-hover:bg-blue-500 transition-colors duration-300">
                                <svg class="w-5 h-5 text-blue-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">24/7 Availability</h4>
                                <p class="text-gray-500 text-sm">Round-the-clock service for all your transportation needs</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 group">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center group-hover:bg-blue-500 transition-colors duration-300">
                                <svg class="w-5 h-5 text-blue-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Fast & Reliable</h4>
                                <p class="text-gray-500 text-sm">Punctual pickups and efficient routes every time</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 group">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center group-hover:bg-blue-500 transition-colors duration-300">
                                <svg class="w-5 h-5 text-blue-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Transparent Pricing</h4>
                                <p class="text-gray-500 text-sm">No hidden fees, clear rates for every ride</p>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-blue-500/50 group">
                            <span>Learn More</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                        <a href="#book" class="inline-flex items-center justify-center px-8 py-4 bg-gray-800 hover:bg-gray-700 border border-gray-700 hover:border-blue-500 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105 group">
                            <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>Book Now</span>
                        </a>
                    </div>

                    <!-- Social Proof -->
                    <div class="flex items-center gap-6 pt-4 border-t border-gray-800">
                        <div class="flex -space-x-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 border-2 border-[#070707] flex items-center justify-center text-white font-bold text-sm">JD</div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-500 to-pink-400 border-2 border-[#070707] flex items-center justify-center text-white font-bold text-sm">AM</div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-green-500 to-emerald-400 border-2 border-[#070707] flex items-center justify-center text-white font-bold text-sm">CS</div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-orange-500 to-red-400 border-2 border-[#070707] flex items-center justify-center text-white font-bold text-sm">LM</div>
                        </div>
                        <div>
                            <div class="flex items-center gap-1 mb-1">
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                                <span class="text-white font-semibold text-sm ml-2">5.0</span>
                            </div>
                            <p class="text-gray-500 text-sm">Rated excellent by our customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="py-16 mt-[7rem!important] rounded-lg contenedor px-[3rem] grid md:grid-cols-2 gap-[1.5rem]">
        <div class="w-full flex flex-col justify-center">
            <h2 class="text-[3rem] text-white font-bold mb-3 w-full leading-[1.1]">Trusted by <span class="text-[#004AAD]" id="counter">+0</span> users </h2>
            <p class="text-[1.2rem] text-white ">
                Providing safe, convenient transportation services across Medellín, every day. </p>
        </div>


        <div class="relative h-full min-h-[500px] hidden md:block">
            <div class="absolute top-8 right-0 h-[220px] w-64 bg-[#070707] p-5 rounded-xl shadow-lg transform hover:rotate-0 hover:scale-105 transition-all duration-300  border border-[#262626]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                        AM
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-300 text-sm">Ana María</h4>
                        <div class="flex gap-0.5">
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    "Siempre puntuales. Me siento segura cada vez que viajo con ellos."
                </p>
            </div>

            <div class="absolute top-32 left-16 h-[220px] w-72 bg-[#070707] p-5 rounded-xl shadow-lg transform hover:rotate-0 hover:scale-105 transition-all duration-300  border border-[#262626] z-10">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                        CR
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-300 text-sm">Carlos Ramírez</h4>
                        <div class="flex gap-0.5">
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    "Recomendado 100%. Conocí los mejores lugares de Medellín gracias a su servicio profesional."
                </p>
            </div>

            <div class="absolute bottom-13 right-20 h-[220px] w-64 bg-[#070707] p-5 rounded-xl shadow-lg transform hover:rotate-0 hover:scale-105 transition-all duration-300 border border-[#262626] z-10">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                        LM
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-300 text-sm">Laura Martínez</h4>
                        <div class="flex gap-0.5">
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    "Lo uso para mis viajes de negocios. Siempre a tiempo y muy profesionales."
                </p>
            </div>

            <div class="absolute top-[-1rem] left-50 transform -translate-x-1/2 h-[220px] w-60 bg-[#070707] p-5 rounded-xl shadow-lg hover:rotate-0 hover:scale-105 transition-all duration-300 border border-[#262626]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                        JD
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-300 text-sm">Juan Durán</h4>
                        <div class="flex gap-0.5">
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    "El mejor servicio de transporte en Medellín. Confiable y seguro."
                </p>
            </div>
        </div>

    </section> -->



    <!--==================== Fleet Section ====================
    ============================================================ -->

    <section class="relative bg-[#070707] py-24 px-4 overflow-hidden" id="fleet">
        <!-- Animated background elements -->


        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/30 rounded-full px-4 py-2 mb-6">
                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    <span class="text-blue-400 text-sm font-medium">Premium Vehicles</span>
                </div>
                <h2 class="text-[2.5rem] font-bold text-white mb-4 leading-tight">
                    Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">Premium</span> Fleet
                </h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Choose from our selection of modern, comfortable, and well-maintained vehicles for your journey
                </p>
            </div>

            <!-- Fleet Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <?php
                $fleet = [
                    [
                        'name' => 'Sedan Comfort',
                        'category' => 'Economy',
                        'passengers' => '1-3',
                        'luggage' => '2',
                        'features' => ['Air Conditioning', 'GPS Navigation', 'Phone Charger', 'Water Bottles'],
                        'price' => 45000,
                        'image' => 'sedan.jpg',
                        'badge' => 'Popular'
                    ],
                    [
                        'name' => 'SUV Premium',
                        'category' => 'Luxury',
                        'passengers' => '1-5',
                        'luggage' => '4',
                        'features' => ['Leather Seats', 'Premium Sound', 'WiFi Available', 'Extra Space'],
                        'price' => 75000,
                        'image' => 'suv.jpg',
                        'badge' => 'Best Value'
                    ],
                    [
                        'name' => 'Van Spacious',
                        'category' => 'Group',
                        'passengers' => '1-8',
                        'luggage' => '8',
                        'features' => ['Extra Luggage', 'Group Travel', 'Comfort Seats', 'Entertainment'],
                        'price' => 120000,
                        'image' => 'van.jpg',
                        'badge' => 'For Groups'
                    ]
                ];

                foreach ($fleet as $vehicle):
                ?>
                    <div class="group relative">
                        <!-- Card -->
                        <div class="relative bg-gradient-to-br from-gray-800/50 to-gray-900/50 backdrop-blur-sm border border-gray-700 rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all duration-500 hover:scale-[1.02]">
                            <!-- Badge -->
                            <?php if (isset($vehicle['badge'])): ?>
                                <div class="absolute top-4 right-4 z-10 bg-gradient-to-r from-blue-600 to-cyan-500 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                                    <?php echo $vehicle['badge']; ?>
                                </div>
                            <?php endif; ?>

                            <!-- Image Container -->
                            <div class="relative h-64 overflow-hidden bg-gradient-to-br from-gray-700 to-gray-800">
                                <!-- Placeholder for image - replace with actual images -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg class="w-32 h-32 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7" />
                                    </svg>
                                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-60"></div>
                                </div>
                                <!-- Uncomment when you have real images -->
                                <!-- <img src="src/images/<?php echo $vehicle['image']; ?>" alt="<?php echo $vehicle['name']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"> -->

                                <!-- Overlay gradient -->
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent"></div>

                                <!-- Category badge on image -->
                                <div class="absolute bottom-4 left-4 bg-gray-900/80 backdrop-blur-sm border border-gray-700 text-white text-xs font-semibold px-3 py-1.5 rounded-lg">
                                    <?php echo $vehicle['category']; ?>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-6 space-y-4">
                                <!-- Vehicle Name -->
                                <div>
                                    <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-blue-400 transition-colors">
                                        <?php echo $vehicle['name']; ?>
                                    </h3>
                                    <div class="flex items-center gap-1">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <svg class="w-4 h-4 <?php echo $i < 4 ? 'text-yellow-400' : 'text-gray-600'; ?> fill-current" viewBox="0 0 20 20">
                                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                            </svg>
                                        <?php endfor; ?>
                                        <span class="text-gray-500 text-sm ml-2">(4.8)</span>
                                    </div>
                                </div>

                                <!-- Specs -->
                                <div class="flex items-center gap-4 pt-2 border-t border-gray-700">
                                    <div class="flex items-center gap-2 text-gray-400">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        <span class="text-sm font-medium"><?php echo $vehicle['passengers']; ?></span>
                                    </div>
                                    <div class="flex items-center gap-2 text-gray-400">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                        <span class="text-sm font-medium"><?php echo $vehicle['luggage']; ?> bags</span>
                                    </div>
                                </div>

                                <!-- Features -->
                                <div class="space-y-2">
                                    <?php foreach (array_slice($vehicle['features'], 0, 3) as $feature): ?>
                                        <div class="flex items-center gap-2 text-gray-400 text-sm">
                                            <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <span><?php echo $feature; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php if (count($vehicle['features']) > 3): ?>
                                        <button class="text-blue-400 text-sm font-medium hover:text-blue-300 transition-colors">
                                            + <?php echo count($vehicle['features']) - 3; ?> more features
                                        </button>
                                    <?php endif; ?>
                                </div>

                                <!-- Pricing & CTA -->
                                <div class="pt-4 border-t border-gray-700 flex items-center justify-between">
                                    <div>
                                        <p class="text-gray-500 text-xs">Starting from</p>
                                        <p class="text-2xl font-bold text-white">
                                            $<?php echo number_format($vehicle['price'], 0, ',', '.'); ?>
                                            <span class="text-sm text-gray-500 font-normal">COP</span>
                                        </p>
                                    </div>
                                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-blue-500/50 flex items-center gap-2 group">
                                        <span>Book Now</span>
                                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Hover Glow Effect -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-2xl blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500 -z-10"></div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Additional Features Section -->
            <div class="grid md:grid-cols-4 gap-6 mt-16">
                <div class="bg-gray-800/30 backdrop-blur-sm border border-gray-700 rounded-xl p-6 hover:border-blue-500/50 transition-all duration-300 hover:scale-105 group">
                    <div class="w-12 h-12 bg-blue-500/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-500 transition-colors">
                        <svg class="w-6 h-6 text-blue-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h4 class="text-white font-bold mb-2">Safety First</h4>
                    <p class="text-gray-500 text-sm">Regular maintenance and safety checks on all vehicles</p>
                </div>

                <div class="bg-gray-800/30 backdrop-blur-sm border border-gray-700 rounded-xl p-6 hover:border-blue-500/50 transition-all duration-300 hover:scale-105 group">
                    <div class="w-12 h-12 bg-blue-500/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-500 transition-colors">
                        <svg class="w-6 h-6 text-blue-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="text-white font-bold mb-2">Clean & Sanitized</h4>
                    <p class="text-gray-500 text-sm">Thoroughly cleaned after every ride for your comfort</p>
                </div>

                <div class="bg-gray-800/30 backdrop-blur-sm border border-gray-700 rounded-xl p-6 hover:border-blue-500/50 transition-all duration-300 hover:scale-105 group">
                    <div class="w-12 h-12 bg-blue-500/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-500 transition-colors">
                        <svg class="w-6 h-6 text-blue-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h4 class="text-white font-bold mb-2">Modern Fleet</h4>
                    <p class="text-gray-500 text-sm">Latest models with advanced technology and comfort</p>
                </div>

                <div class="bg-gray-800/30 backdrop-blur-sm border border-gray-700 rounded-xl p-6 hover:border-blue-500/50 transition-all duration-300 hover:scale-105 group">
                    <div class="w-12 h-12 bg-blue-500/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-500 transition-colors">
                        <svg class="w-6 h-6 text-blue-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="text-white font-bold mb-2">Best Rates</h4>
                    <p class="text-gray-500 text-sm">Competitive pricing with no hidden fees</p>
                </div>
            </div>

            <!-- CTA Banner -->
            <div class="mt-16 bg-gradient-to-br from-blue-600/5 to-cyan-500/5 border border-blue-500/5 rounded-2xl p-8 md:p-12 text-center backdrop-blur-sm">
                <h3 class="text-[2.1rem] font-bold text-white mb-4">
                    Can't Find What You're Looking For?
                </h3>
                <p class="text-gray-400 text-lg mb-8 max-w-2xl mx-auto">
                    We offer custom solutions for special events, corporate travel, and group transportation. Contact us for personalized service.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-blue-500/50 group">
                        <span>Contact Us</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="tel:+573001234567" class="inline-flex items-center justify-center px-8 py-4 bg-gray-800 hover:bg-gray-700 border border-gray-700 hover:border-blue-500 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105 group">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>Call Now</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


     
    <!--==================== Top Destinations ====================
    ================================================================ -->

    <section class="relative bg-[#070707] py-24 px-4 overflow-hidden" id="destinations">

        <div class="contenedor relative z-10">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/30 rounded-full px-4 py-2 mb-6 animate-fade-in">
                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="text-blue-400 text-sm font-medium">Popular Destinations</span>
                </div>

                <h2 class="text-[2.5rem] font-bold text-white mb-4 leading-tight">
                    Explore <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">Amazing</span> Places
                </h2>

                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    From vibrant neighborhoods to mountain retreats, we take you to Antioquia's hidden gems
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <?php
                $destinations = [
                    [
                        'name' => 'Guatapé & El Peñol',
                        'tagline' => "Colombia's Most Colorful Town",
                        'description' => 'Climb 740 steps to breathtaking views, explore vibrant streets adorned with zócalos, and enjoy water sports on the stunning reservoir.',
                        'duration' => '8-10 hours',
                        'distance' => '2 hours from Medellín',
                        'difficulty' => 'Moderate',
                        'price' => 150000,
                        'image' => 'guatape.jpg',
                        'highlights' => ['El Peñol Rock', 'Colorful Streets', 'Boat Tours', 'Photography'],
                        'badge' => 'Most Popular',
                        'badge_color' => 'blue'
                    ],
                    [
                        'name' => 'Comuna 13',
                        'tagline' => 'Street Art & Transformation',
                        'description' => 'Witness urban renewal through vibrant graffiti, electric escalators, and inspiring community stories of resilience and hope.',
                        'duration' => '3-4 hours',
                        'distance' => '30 min from El Poblado',
                        'difficulty' => 'Easy',
                        'price' => 80000,
                        'image' => 'comuna13.jpg',
                        'highlights' => ['Street Art', 'Escalators', 'Hip Hop', 'Local Guides'],
                        'badge' => 'Cultural',
                        'badge_color' => 'purple'
                    ],
                    [
                        'name' => 'Jardín',
                        'tagline' => 'The Garden of Antioquia',
                        'description' => 'Experience authentic coffee culture, ride cable cars to mountain viewpoints, and explore waterfalls in this charming pueblo.',
                        'duration' => 'Full Day',
                        'distance' => '3 hours from Medellín',
                        'difficulty' => 'Moderate',
                        'price' => 200000,
                        'image' => 'jardin.jpg',
                        'highlights' => ['Coffee Tours', 'Cable Car', 'Waterfalls', 'Colonial Town'],
                        'badge' => 'Hidden Gem',
                        'badge_color' => 'green'
                    ],
                    [
                        'name' => 'Parque Arví',
                        'tagline' => 'Mountain Nature Escape',
                        'description' => 'Ride the scenic Metrocable to 3,000 acres of forests, hiking trails, and weekend farmers markets above the city.',
                        'duration' => '4-6 hours',
                        'distance' => '45 min by cable car',
                        'difficulty' => 'Easy to Moderate',
                        'price' => 100000,
                        'image' => 'arvi.jpg',
                        'highlights' => ['Metrocable', 'Hiking Trails', 'Market', 'Bird Watching'],
                        'badge' => 'Nature Lover',
                        'badge_color' => 'green'
                    ],
                    [
                        'name' => 'Santa Fé de Antioquia',
                        'tagline' => 'Colonial Heritage Town',
                        'description' => 'Step back in time exploring cobblestone streets, colonial architecture, and the iconic Puente de Occidente bridge.',
                        'duration' => '6-8 hours',
                        'distance' => '1.5 hours from Medellín',
                        'difficulty' => 'Easy',
                        'price' => 120000,
                        'image' => 'santafe.jpg',
                        'highlights' => ['Colonial Town', 'Historic Bridge', 'Museums', 'Traditional Food'],
                        'badge' => 'Historical',
                        'badge_color' => 'amber'
                    ],
                    [
                        'name' => 'Río Claro',
                        'tagline' => 'Underground River Adventure',
                        'description' => 'Explore marble caves, tube through underground rivers, and trek through tropical rainforest in this unique reserve.',
                        'duration' => 'Full Day',
                        'distance' => '3.5 hours from Medellín',
                        'difficulty' => 'Challenging',
                        'price' => 250000,
                        'image' => 'rioclaro.jpg',
                        'highlights' => ['Cave Exploration', 'River Tubing', 'Wildlife', 'Overnight Stay'],
                        'badge' => 'Adventure',
                        'badge_color' => 'red'
                    ]
                ];

                foreach ($destinations as $index => $destination):
                    $badge_colors = [
                        'blue' => 'from-blue-600 to-blue-500',
                        'purple' => 'from-purple-600 to-purple-500',
                        'green' => 'from-green-600 to-green-500',
                        'amber' => 'from-amber-600 to-amber-500',
                        'red' => 'from-red-600 to-red-500'
                    ];
                    $gradient = $badge_colors[$destination['badge_color']] ?? 'from-blue-600 to-cyan-500';
                ?>

                    <div class="group relative" style="animation-delay: <?php echo $index * 100; ?>ms;">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-2xl blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500 -z-10"></div>

                        <div class="relative bg-gradient-to-br from-gray-800/50 to-gray-900/50 backdrop-blur-sm border border-gray-700 rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all duration-500 hover:scale-[1.02] h-full flex flex-col">

                            <div class="relative h-64 overflow-hidden bg-gradient-to-br from-gray-700 to-gray-800">
                                <div class="absolute top-4 right-4 z-10 bg-gradient-to-r <?php echo $gradient; ?> text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg backdrop-blur-sm">
                                    <?php echo $destination['badge']; ?>
                                </div>

                                <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-gray-700 to-gray-900">
                                    <svg class="w-20 h-20 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>

                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent"></div>

                                <div class="absolute bottom-4 left-4 right-4">
                                    <div class="flex items-center gap-2 text-white/80 text-xs mb-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span><?php echo $destination['duration']; ?></span>
                                        <span class="mx-1">•</span>
                                        <span><?php echo $destination['difficulty']; ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 flex-1 flex flex-col">
                                <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-blue-400 transition-colors">
                                    <?php echo $destination['name']; ?>
                                </h3>

                                <p class="text-blue-400 text-sm font-medium mb-3">
                                    <?php echo $destination['tagline']; ?>
                                </p>

                                <p class="text-gray-400 text-sm leading-relaxed mb-4 flex-1">
                                    <?php echo $destination['description']; ?>
                                </p>

                                <div class="flex flex-wrap gap-2 mb-4">
                                    <?php foreach ($destination['highlights'] as $highlight): ?>
                                        <span class="inline-flex items-center gap-1 bg-gray-800/50 border border-gray-700 text-gray-400 text-xs px-2 py-1 rounded-md">
                                            <svg class="w-3 h-3 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <?php echo $highlight; ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>

                                <div class="pt-4 border-t border-gray-700 space-y-2 mb-4">
                                    <div class="flex items-center gap-2 text-gray-400 text-sm">
                                        <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span><?php echo $destination['distance']; ?></span>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between pt-4 border-t border-gray-700">
                                    <div>
                                        <p class="text-gray-500 text-xs">Starting from</p>
                                        <p class="text-2xl font-bold text-white">
                                            $<?php echo number_format($destination['price'], 0, ',', '.'); ?>
                                            <span class="text-sm text-gray-500 font-normal">COP</span>
                                        </p>
                                    </div>
                                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-blue-500/50 flex items-center gap-2 group">
                                        <span>Book Now</span>
                                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- <div class="mt-16 text-center">
                <div class="inline-block bg-gray-800/30 backdrop-blur-sm border border-gray-700 rounded-2xl p-8 hover:border-blue-500/50 transition-all duration-300">
                    <h3 class="text-white text-2xl font-bold mb-3">Looking for a Custom Itinerary?</h3>
                    <p class="text-gray-400 mb-6 max-w-xl">We create personalized tours tailored to your interests, schedule, and group size</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-blue-500/50 group">
                            <span>Plan Custom Tour</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                        <a href="#destinations-all" class="inline-flex items-center justify-center px-8 py-4 bg-gray-800 hover:bg-gray-700 border border-gray-700 hover:border-blue-500 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105 group">
                            <span>View All Destinations</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>


    <!--==================== FAQ Section ====================
    ============================================================ -->

    <section class="relative py-24 px-4 overflow-hidden bg-[#070707]">


        <div class="contenedor relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-[2.5rem] font-bold text-white mb-4">
                    Frequently Asked <span class="text-blue-500">Questions</span>
                </h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Everything you need to know about our transportation services in Medellín
                </p>
            </div>

            <!-- FAQ Grid -->
            <div class="grid md:grid-cols-2 gap-6">
                <?php
                $faqs = [
                    [
                        'question' => 'How do I book a ride?',
                        'answer' => 'Booking is simple! Fill out the form on our homepage with your pickup location, destination, date, and passenger details. Click "Continue" and you\'ll receive instant confirmation with your driver details.'
                    ],
                    [
                        'question' => 'What payment methods do you accept?',
                        'answer' => 'We accept cash (COP), credit/debit cards (Visa, Mastercard), and digital payments through Nequi and Bancolombia. Payment can be made in advance or at the end of your trip.'
                    ],
                    [
                        'question' => 'Can I cancel or modify my reservation?',
                        'answer' => 'Yes! Free cancellations up to 24 hours before your scheduled pickup. Modifications can be made up to 12 hours in advance. Contact us through WhatsApp or our contact form.'
                    ],
                    [
                        'question' => 'Do you provide airport transfers?',
                        'answer' => 'Absolutely! We specialize in seamless airport pickups from José María Córdova (Rionegro) and Enrique Olaya Herrera airports. Our drivers track your flight in real-time and adjust for delays.'
                    ],
                    [
                        'question' => 'What areas do you cover?',
                        'answer' => 'We operate throughout Medellín and the Metropolitan Area including El Poblado, Laureles, Envigado, Sabaneta, and surrounding municipalities. Airport transfers available from both airports.'
                    ],
                    [
                        'question' => 'Are your drivers licensed and insured?',
                        'answer' => 'Yes! All our drivers are professionally licensed, background-checked, and our vehicles carry full commercial insurance. Your safety is our top priority.'
                    ],
                    [
                        'question' => 'How much luggage can I bring?',
                        'answer' => 'Standard vehicles accommodate 2-3 large suitcases and carry-ons. Need more space? Select our SUV option for up to 5 large bags. Extra luggage can be arranged in advance.'
                    ],
                    [
                        'question' => 'Do you offer hourly or multi-day services?',
                        'answer' => 'Yes! In addition to point-to-point transfers, we offer hourly rentals (minimum 4 hours) and multi-day packages perfect for city tours, business trips, or exploring Antioquia.'
                    ]
                ];

                foreach ($faqs as $index => $faq) :
                ?>
                    <div class="faq-item group bg-[#070707] backdrop-blur-sm border border-gray-700 rounded-2xl px-6 py-4 hover:bg-[#111111] hover:border-blue-500/50 transition-all duration-300 cursor-pointer">
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex-1">
                                <h3 class="text-white text-[1.10rem] font-semibold group-hover:text-blue-400 transition-colors">
                                    <?php echo $faq['question']; ?>
                                </h3>
                                <div class="faq-answer overflow-hidden max-h-0 transition-all duration-300">
                                    <p class="text-gray-400 leading-relaxed">
                                        <?php echo $faq['answer']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="faq-icon flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-500/10 text-blue-500 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- CTA Bottom -->
            <div class="mt-8">
                <div class="bg-[#070707] backdrop-blur-sm border border-gray-700 rounded-2xl px-16 py-4 hover:border-blue-500/50 transition-all duration-300 w-full flex justify-between">
                    <div>
                        <h3 class="text-white text-2xl font-bold mb-3">Still have questions?</h3>
                        <p class="text-gray-400">Our support team is here to help 24/7</p>
                    </div>
                    <div class="gap-4 flex items-center">
                        <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-all duration-300 hover:scale-105 h-fit">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Contact Us
                        </a>
                        <a href="https://wa.me/573001234567" class="inline-flex items-center justify-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition-all duration-300 hover:scale-105 h-fit">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--==================== Footer ====================-->
    <?php include 'includes/footer.php'; ?>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('#testimonial-carousel .carousel-slide');
            const dots = document.querySelectorAll('#testimonial-carousel .carousel-dot');
            const prev = document.getElementById('prev-slide');
            const next = document.getElementById('next-slide');
            let current = 0,
                timeoutId;

            function showSlide(idx) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('hidden', i !== idx);
                    slide.classList.toggle('block', i === idx);
                });
                dots.forEach((dot, i) => {
                    dot.classList.toggle('opacity-70', i === idx);
                    dot.classList.toggle('opacity-30', i !== idx);
                });
                current = idx;
            }

            function nextSlide() {
                showSlide((current + 1) % slides.length);
                resetInterval();
            }

            function prevSlide() {
                showSlide((current - 1 + slides.length) % slides.length);
                resetInterval();
            }

            function goToSlide(idx) {
                showSlide(idx);
                resetInterval();
            }

            function resetInterval() {
                if (timeoutId) clearInterval(timeoutId);
                timeoutId = setInterval(nextSlide, 5000);
            }

            next.addEventListener('click', nextSlide);
            prev.addEventListener('click', prevSlide);
            dots.forEach((dot, i) => {
                dot.addEventListener('click', () => goToSlide(i));
            });

            showSlide(0);
            timeoutId = setInterval(nextSlide, 5000);
        });

        // Incremento de numeros

        function animateCounter(element, target, duration = 2000) {
            let start = 0;
            const increment = target / (duration / 16);
            let current = 0;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = `+${target}`;
                    clearInterval(timer);
                } else {
                    element.textContent = `+${Math.floor(current)}`;
                }
            }, 16);
        }

        // Intersection Observer para activar la animación cuando el elemento sea visible
        document.addEventListener('DOMContentLoaded', function() {
            const counterElement = document.getElementById('counter');
            let hasAnimated = false;

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !hasAnimated) {
                        animateCounter(counterElement, 2000, 2000);
                        hasAnimated = true;
                        observer.unobserve(counterElement);
                    }
                });
            }, {
                threshold: 0.5
            });

            if (counterElement) {
                observer.observe(counterElement);
            }
        });


        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                item.addEventListener('click', function() {
                    const answer = this.querySelector('.faq-answer');
                    const icon = this.querySelector('.faq-icon svg');
                    const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

                    // Close all other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            const otherAnswer = otherItem.querySelector('.faq-answer');
                            const otherIcon = otherItem.querySelector('.faq-icon svg');
                            otherAnswer.style.maxHeight = '0px';
                            otherIcon.style.transform = 'rotate(0deg)';
                        }
                    });

                    // Toggle current item
                    if (isOpen) {
                        answer.style.maxHeight = '0px';
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                        icon.style.transform = 'rotate(45deg)';
                    }
                });
            });
        });
    </script>

</body>

</html>