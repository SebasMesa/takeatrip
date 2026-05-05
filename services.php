<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take A Trip - Services</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="src/css/estilos.css">
    <link href='https://cdn.boxicons.com/3.0.3/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>

    <!-- Services Section -->
    <section class="min-h-screen text-white">

        <!-- Hero Section -->
        <div class="relative py-24 px-4 overflow-hidden">


            <div class="text-center mb-[5rem]">
                <div class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/30 rounded-full px-4 py-2 mb-6">
                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    <span class="text-blue-400 text-md font-medium">Services</span>
                </div>
                <h2 class="text-[3.5rem] font-bold text-white mb-4 leading-tight">
                    Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">Premium</span> Services
                </h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Discover our comprehensive range of transportation solutions designed for comfort, safety, and unforgettable experiences in Medellín
                </p>
            </div>

            <!-- Services Grid -->
            <div class="max-w-7xl mx-auto px-4 pb-24">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Fleet Grid -->
                    <?php
                    $services = [
                        [
                            'name' => 'City Tours',
                            'descripcion' => 'Explore Medellín`s iconic landmarks with expert bilingual guides and premium transportation.',
                            'features' => ['Bilingual expert guides', 'Custom routes available', 'Premium vehicles', 'Photo opportunities included'],
                            'price' => 45000,
                            'image' => 'sedan.jpg',
                            'badge' => 'Popular'
                        ],
                        [
                            'name' => 'Airport Transfer',
                            'descripcion' => 'Safe and punctual transportation to/from José María Córdova International Airport.',
                            'features' => ['Real-time flight tracking', 'Meet & greet service', '24/7 availability', 'Luggage assistance'],
                            'price' => 50000,
                            'image' => 'sedan.jpg',
                            'badge' => 'Reliable'
                        ],
                        [
                            'name' => 'Corporate Transport',
                            'descripcion' => 'Professional transportation for business meetings, events, and corporate travel needs.',
                            'features' => ['Executive vehicles', 'Professional chauffeurs', 'Monthly contracts available', 'Invoicing & reporting'],
                            'price' => 45000,
                            'image' => 'sedan.jpg',
                            'badge' => 'Premium'
                        ],

                        [
                            'name' => 'Special Events',
                            'descripcion' => 'Exclusive transportation for weddings, celebrations, and unforgettable moments.',
                            'features' => ['Luxury fleet selection', 'Custom decorations', 'Professional photography', 'Red carpet service'],
                            'price' => 45000,
                            'image' => 'sedan.jpg',
                            'badge' => 'Luxury'
                        ],


                    ];

                    foreach ($services as $service):
                    ?>
                        <div class="group relative">
                            <div class="relative bg-gradient-to-br from-gray-800/50 to-gray-900/50 backdrop-blur-sm border border-gray-700 rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all duration-500 hover:scale-[1.02]">
                                <?php if (isset($service['badge'])): ?>
                                    <div class="absolute top-4 right-4 z-10 bg-gradient-to-r from-blue-600 to-cyan-500 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                                        <?php echo $service['badge']; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="relative h-64 overflow-hidden bg-gradient-to-br from-gray-700 to-gray-800">
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <svg class="w-32 h-32 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7" />
                                        </svg>
                                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-60"></div>
                                    </div>
                                    <!-- Uncomment when you have real images -->
                                    <!-- <img src="src/images/<?php echo $service['image']; ?>" alt="<?php echo $service['name']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"> -->

                                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent"></div>

                                </div>

                                <div class="p-6 space-y-4">
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-blue-400 transition-colors">
                                            <?php echo $service['name']; ?>
                                        </h3>
                                        <!-- <div class="flex items-center gap-1">
                                            <?php for ($i = 0; $i < 5; $i++): ?>
                                                <svg class="w-4 h-4 <?php echo $i < 4 ? 'text-yellow-400' : 'text-gray-600'; ?> fill-current" viewBox="0 0 20 20">
                                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                                </svg>
                                            <?php endfor; ?>
                                            <span class="text-gray-500 text-sm ml-2">(4.8)</span>
                                        </div> -->
                                    </div>

                                    <div class="flex items-center gap-4 pt-2 border-t border-gray-700">
                                        <div class="flex items-center gap-2 text-gray-400">
                                            <span class="text-md font-normal"><?php echo $service['descripcion']; ?></span>

                                        </div>

                                    </div>

                                    <!-- Features -->
                                    <div class="space-y-2">
                                        <?php foreach (array_slice($service['features'], 0, 3) as $feature): ?>
                                            <div class="flex items-center gap-2 text-gray-400 text-sm">
                                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                </svg>
                                                <span><?php echo $feature; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                        <?php if (count($service['features']) > 3): ?>
                                            <button class="text-blue-400 text-sm font-medium hover:text-blue-300 transition-colors">
                                                + <?php echo count($service['features']) - 3; ?> more features
                                            </button>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Pricing & CTA -->
                                    <div class="pt-4 border-t border-gray-700 flex items-center justify-between">
                                        <div>
                                            <p class="text-gray-500 text-xs">Starting from</p>
                                            <p class="text-2xl font-bold text-white">
                                                $<?php echo number_format($service['price'], 0, ',', '.'); ?>
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

                <!-- CTA Section -->
                <div class="max-w-7xl mx-auto px-4 pb-24 mt-[5rem]">
                    <div class="bg-gradient-to-br from-blue-600/5 to-cyan-500/5 border border-blue-500/5 rounded-lg backdrop-blur-sm p-12 md:p-16 text-center">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">
                            Ready to Start Your Journey?
                        </h2>
                        <p class="text-blue-100 text-lg md:text-xl mb-10 max-w-2xl mx-auto">
                            Book your perfect ride today and experience Medellín like never before with our premium transportation services.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <button class="bg-white text-[#0066FF] px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors duration-300">
                                Contact Us
                            </button>
                            <button class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-[#0066FF] transition-all duration-300">
                                View Fleet
                            </button>
                        </div>
                    </div>
                </div>


                <!-- Service 1: City Tours -->
                <div class="bg-[#0F1535] rounded-2xl overflow-hidden group hover:transform hover:scale-105 transition-all duration-300">
                    <!-- Badge -->
                    <div class="relative">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-[#0066FF] text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Popular</span>
                        </div>
                        <!-- Image placeholder -->
                        <div class="h-48 bg-gradient-to-br from-gray-700 to-gray-800 relative overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-20 h-20 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0F1535] to-transparent"></div>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-3">City Tours</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Explore Medellín's iconic landmarks with expert bilingual guides and premium transportation.
                        </p>

                        <!-- Features -->
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-sm text-gray-300">
                                <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Bilingual expert guides</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-300">
                                <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Custom routes available</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-300">
                                <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Premium vehicles</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-300">
                                <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Photo opportunities included</span>
                            </div>
                        </div>

                        <!-- Rating -->
                        <div class="flex items-center mb-6">
                            <div class="flex text-yellow-400 mr-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                            <span class="text-gray-400 text-sm">5.0 (240 reviews)</span>
                        </div>

                        <!-- Price & CTA -->
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-400 text-sm">Starting from</p>
                                <p class="text-3xl font-bold">$85.00</p>
                            </div>
                            <button class="bg-[#0066FF] hover:bg-[#0052CC] text-white px-6 py-3 rounded-lg font-semibold transition-colors duration-300">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

    </section>


    <?php
    include 'includes/footer.php';
    ?>


</body>

</html>