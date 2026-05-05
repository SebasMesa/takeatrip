<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take A Trip - About Us</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="src/css/estilos.css">
    <link href='https://cdn.boxicons.com/3.0.3/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>

    <!-- About Us Section -->
    <section class="min-h-screen">

        <!-- Hero Banner -->
        <div class="relative h-[30vh] bg-gradient-to-br from-gray-800 to-gray-900 dark:from-gray-900 dark:to-black flex items-center justify-center overflow-hidden">
            <!-- <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div> -->
            <h1 class="relative text-[3rem] md:text-[3.5rem] font-light tracking-wider text-white capitalize">
                About Us
            </h1>
        </div>

        <!-- Story Section - Full Width Image + Text -->
        <div class="relative">
            <div class="max-w-7xl mx-auto px-4 py-24">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="space-y-6">
                            <div class="inline-block">
                                <span class="text-sm font-semibold tracking-widest text-blue-600 uppercase">Our Journey</span>
                                <div class="w-12 h-0.5 bg-blue-600 mt-2"></div>
                            </div>
                            <h2 class="text-4xl md:text-5xl font-light text-gray-900 dark:text-white">
                                Redefining Transportation in <span class="italic font-normal">Medellín</span>
                            </h2>
                            <div class="space-y-4 text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
                                <p>
                                    Founded with a vision to transform urban mobility, we've become Medellín's most trusted transportation service, serving over 2,000 satisfied customers.
                                </p>
                                <p>
                                    Every journey with us is crafted with precision—from our meticulously maintained fleet to our professionally trained drivers who know every corner of this beautiful city.
                                </p>
                                <p>
                                    We don't just move people; we create experiences, build connections, and contribute to making Medellín more accessible to everyone.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="relative h-[500px] group">
                            <div class="absolute inset-0 bg-blue-600 rounded-sm transform rotate-3 group-hover:rotate-6 transition-transform duration-500"></div>
                            <div class="relative h-full bg-gray-200 dark:bg-gray-800 rounded-sm overflow-hidden">
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-32 h-32 text-gray-300 dark:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Banner -->
        <div class="py-20">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center border-r border-gray-800 last:border-r-0">
                        <div class="text-5xl md:text-6xl font-light text-white mb-2">2K+</div>
                        <div class="text-sm tracking-widest text-gray-400 uppercase">Customers</div>
                    </div>
                    <div class="text-center border-r border-gray-800 last:border-r-0">
                        <div class="text-5xl md:text-6xl font-light text-white mb-2">5+</div>
                        <div class="text-sm tracking-widest text-gray-400 uppercase">Years</div>
                    </div>
                    <div class="text-center border-r border-gray-800 last:border-r-0">
                        <div class="text-5xl md:text-6xl font-light text-white mb-2">15+</div>
                        <div class="text-sm tracking-widest text-gray-400 uppercase">Vehicles</div>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl md:text-6xl font-light text-white mb-2">24/7</div>
                        <div class="text-sm tracking-widest text-gray-400 uppercase">Support</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Values Section -->
        <div class="">
            <div class="max-w-7xl mx-auto px-4 py-24">
                <div class="text-center mb-16">
                    <span class="text-sm font-semibold tracking-widest text-blue-600 uppercase">What Drives Us</span>
                    <div class="w-12 h-0.5 bg-blue-600 mt-2 mx-auto mb-6"></div>
                    <h2 class="text-4xl font-light text-gray-900 dark:text-white">Core Principles</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <!-- Value 1 -->
                    <div class="group">
                        <div class="relative mb-8 overflow-hidden">
                            <div class="h-64 bg-gray-100 dark:bg-gray-800 flex items-center justify-center transform group-hover:scale-105 transition-transform duration-500">
                                <svg class="w-20 h-20 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-light mb-4 text-gray-900 dark:text-white">Safety</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Every vehicle undergoes rigorous inspections. Every driver is thoroughly vetted. Your safety is non-negotiable.
                        </p>
                    </div>

                    <!-- Value 2 -->
                    <div class="group">
                        <div class="relative mb-8 overflow-hidden">
                            <div class="h-64 bg-gray-100 dark:bg-gray-800 flex items-center justify-center transform group-hover:scale-105 transition-transform duration-500">
                                <svg class="w-20 h-20 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-light mb-4 text-gray-900 dark:text-white">Punctuality</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Time is precious. We respect yours by being exactly where we need to be, exactly when promised.
                        </p>
                    </div>

                    <!-- Value 3 -->
                    <div class="group">
                        <div class="relative mb-8 overflow-hidden">
                            <div class="h-64 bg-gray-100 dark:bg-gray-800 flex items-center justify-center transform group-hover:scale-105 transition-transform duration-500">
                                <svg class="w-20 h-20 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-light mb-4 text-gray-900 dark:text-white">Excellence</h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Premium vehicles, professional service, exceptional experiences. We settle for nothing less than the best.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mb-10">
            <div class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/30 rounded-full px-4 py-2 mb-6">
                <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>
                <span class="text-blue-400 text-sm font-medium">Premium Vehicles</span>
            </div>
            <h2 class="text-[2.5rem] font-bold text-white mb-4 leading-tight">
                Meet Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">Team</span>
            </h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Choose from our selection of modern, comfortable, and well-maintained vehicles for your journey
            </p>
        </div>

        <!-- Team Grid -->
        <div class="py-24">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-16">

                    <!-- Team Member 1 -->
                    <div class="group text-center">
                        <div class="relative mb-8 overflow-hidden rounded-lg">
                            <div class="aspect-[3/4] bg-gray-200 dark:bg-gray-800 relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg class="w-32 h-32 text-gray-300 dark:text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="absolute inset-0 bg-blue-600 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <h3 class="text-2xl font-light text-gray-900 dark:text-white">Carlos Rodríguez</h3>
                            <p class="text-sm tracking-widest text-gray-500 uppercase">Founder & CEO</p>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="group text-center">
                        <div class="relative mb-8 overflow-hidden rounded-lg">
                            <div class="aspect-[3/4] bg-gray-200 dark:bg-gray-800 relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg class="w-32 h-32 text-gray-300 dark:text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="absolute inset-0 bg-blue-600 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <h3 class="text-2xl font-light text-gray-900 dark:text-white">María González</h3>
                            <p class="text-sm tracking-widest text-gray-500 uppercase">Operations Director</p>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="group text-center">
                        <div class="relative mb-8 overflow-hidden rounded-lg">
                            <div class="aspect-[3/4] bg-gray-200 dark:bg-gray-800 relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg class="w-32 h-32 text-gray-300 dark:text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="absolute inset-0 bg-blue-600 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <h3 class="text-2xl font-light text-gray-900 dark:text-white">Juan Martínez</h3>
                            <p class="text-sm tracking-widest text-gray-500 uppercase">Customer Experience</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Mission & Vision -->
        <div class="py-24">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

                    <!-- Mission -->
                    <div class="space-y-6">
                        <div>
                            <span class="text-sm font-semibold tracking-widest text-blue-600 uppercase">Mission</span>
                            <div class="w-12 h-0.5 bg-blue-600 mt-2 mb-6"></div>
                        </div>
                        <h3 class="text-3xl font-light text-gray-900 dark:text-white leading-tight">
                            Connecting people with places through exceptional service
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
                            We exist to provide safe, reliable transportation that enhances the way people experience Medellín. Every ride is an opportunity to exceed expectations and build lasting trust.
                        </p>
                    </div>

                    <!-- Vision -->
                    <div class="space-y-6">
                        <div>
                            <span class="text-sm font-semibold tracking-widest text-blue-600 uppercase">Vision</span>
                            <div class="w-12 h-0.5 bg-blue-600 mt-2 mb-6"></div>
                        </div>
                        <h3 class="text-3xl font-light text-gray-900 dark:text-white leading-tight">
                            Setting the standard for urban mobility
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
                            To become synonymous with trust and excellence in transportation—the first choice for anyone seeking a superior travel experience in Medellín.
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </section>


    <?php
    include 'includes/footer.php';
    ?>


</body>

</html>