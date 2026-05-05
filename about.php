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

    <div class="contact-hero" style="padding: 80px 24px; text-align:center; border-bottom: 1px solid #1f2937;">

        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>

        <div class="max-w-7xl mx-auto">
            <div class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/30 rounded-full px-4 py-2 mb-4 fade-up delay-1">
                <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-blue-400 text-sm font-medium">About Us</span>
            </div>
            <h1 class="text-[3.2rem] font-bold text-white leading-tight mb-4 fade-up delay-2">
                Who We <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">Are</span>
            </h1>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto leading-relaxed fade-up delay-3">
                Premium transportation service born in Medellín — built on trust, safety, and unforgettable experiences.
            </p>
        </div>
    </div>

    <section class="py-24 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-sm font-semibold tracking-widest text-blue-500 uppercase">Our Journey</span>
                    <div class="w-10 h-0.5 bg-blue-600 mt-2 mb-6"></div>
                    <h2 class="text-[2.4rem] font-light text-white leading-tight mb-6">
                        Redefining Transportation in <em>Medellín</em>
                    </h2>
                    <div class="space-y-4 text-gray-400 text-base leading-relaxed">
                        <p>Founded with a vision to transform urban mobility, we've become Medellín's most trusted transportation service, serving over 2,000 satisfied customers.</p>
                        <p>Every journey is crafted with precision — from our meticulously maintained fleet to our professionally trained drivers who know every corner of this beautiful city.</p>
                        <p>We don't just move people; we create experiences, build connections, and contribute to making Medellín more accessible to everyone.</p>
                    </div>
                    <div class="space-y-3 mt-8">
                        <?php
                        $perks = [
                            'Licensed & Insured operations across Medellín',
                            '24/7 support with real-time driver tracking',
                            '100% transparent pricing, no hidden fees'
                        ];
                        foreach ($perks as $perk): ?>
                            <div class="flex items-center gap-3 text-gray-300 text-sm">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <?php echo $perk; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="flex gap-3 mt-8">
                        <a href="services.php" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-7 py-3.5 rounded-lg transition-all hover:scale-105 flex items-center gap-2">
                            Book Now
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                        <a href="services.php" class="border border-gray-700 hover:border-blue-500 text-white font-semibold px-7 py-3.5 rounded-lg transition-all hover:scale-105">
                            Our Services
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative h-[420px] bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl border border-gray-700 flex items-center justify-center">
                        <svg class="w-24 h-24 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="absolute -bottom-5 -left-5 bg-gray-900/95 border border-gray-700 rounded-xl p-3.5 flex items-center gap-3 shadow-xl">
                        <div class="w-10 h-10 bg-blue-500/15 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xl font-bold text-white leading-none">+208</p>
                            <p class="text-xs text-gray-500 mt-0.5">Happy Clients</p>
                        </div>
                    </div>
                    <div class="absolute -top-5 -right-5 bg-gray-900/95 border border-gray-700 rounded-xl p-3.5 flex items-center gap-3 shadow-xl">
                        <div class="w-10 h-10 bg-green-500/15 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xl font-bold text-white leading-none">100%</p>
                            <p class="text-xs text-gray-500 mt-0.5">Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Banner -->
    <div class="border-t border-b border-gray-800 py-14 px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-2 lg:grid-cols-4 gap-0">
            <?php
            $stats = [
                ['num' => '2K+', 'label' => 'Customers'],
                ['num' => '5+',  'label' => 'Years'],
                ['num' => '15+', 'label' => 'Vehicles'],
                ['num' => '24/7', 'label' => 'Support'],
            ];
            foreach ($stats as $i => $s): ?>
                <div class="text-center py-4 <?php echo $i < 3 ? 'border-r border-gray-800' : ''; ?>">
                    <div class="text-5xl font-light text-white mb-1"><?php echo $s['num']; ?></div>
                    <div class="text-xs tracking-widest text-gray-500 uppercase"><?php echo $s['label']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Core Values -->
    <section class="py-24 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-14">
                <span class="text-sm font-semibold tracking-widest text-blue-500 uppercase">What Drives Us</span>
                <div class="w-10 h-0.5 bg-blue-600 mt-2 mb-5 mx-auto"></div>
                <h2 class="text-[2.2rem] font-bold text-white">
                    Core <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">Principles</span>
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $values = [
                    ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Safety', 'desc' => 'Every vehicle undergoes rigorous inspections. Every driver is thoroughly vetted. Your safety is non-negotiable.'],
                    ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Punctuality', 'desc' => 'Time is precious. We respect yours by being exactly where we need to be, exactly when promised.'],
                    ['icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z', 'title' => 'Excellence', 'desc' => 'Premium vehicles, professional service, exceptional experiences. We settle for nothing less than the best.'],
                ];
                foreach ($values as $v): ?>
                    <div class="group bg-gradient-to-br from-gray-800/50 to-gray-900/50 border border-gray-700 rounded-2xl p-8 hover:border-blue-500/50 transition-all duration-300">
                        <div class="w-14 h-14 bg-blue-500/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-blue-500 transition-colors duration-300">
                            <svg class="w-7 h-7 text-blue-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?php echo $v['icon']; ?>" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors"><?php echo $v['title']; ?></h3>
                        <p class="text-gray-400 text-sm leading-relaxed"><?php echo $v['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="pb-24 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-14">
                <div class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/30 rounded-full px-4 py-2 mb-4">
                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="text-blue-400 text-sm font-medium">The People Behind the Rides</span>
                </div>
                <h2 class="text-[2.2rem] font-bold text-white">
                    Meet Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">Team</span>
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <?php
                $team = [
                    ['name' => 'Carlos Rodríguez', 'role' => 'Founder & CEO'],
                    ['name' => 'María González',   'role' => 'Operations Director'],
                    ['name' => 'Juan Martínez',    'role' => 'Customer Experience'],
                ];
                foreach ($team as $m): ?>
                    <div class="group text-center">
                        <div class="relative aspect-[3/4] bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl border border-gray-700 group-hover:border-blue-500/40 transition-all duration-300 flex items-center justify-center mb-5 overflow-hidden">
                            <svg class="w-20 h-20 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                            <div class="absolute inset-0 bg-blue-600 opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        </div>
                        <h3 class="text-xl font-light text-white mb-1"><?php echo $m['name']; ?></h3>
                        <p class="text-xs tracking-widest text-gray-500 uppercase"><?php echo $m['role']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <div class="border-t border-gray-800 py-24 px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-0">
            <div class="lg:pr-16 lg:border-r border-gray-800 pb-12 lg:pb-0">
                <span class="text-sm font-semibold tracking-widest text-blue-500 uppercase">Mission</span>
                <div class="w-10 h-0.5 bg-blue-600 mt-2 mb-6"></div>
                <h3 class="text-2xl font-light text-white leading-tight mb-4">Connecting people with places through exceptional service</h3>
                <p class="text-gray-400 leading-relaxed">We exist to provide safe, reliable transportation that enhances the way people experience Medellín. Every ride is an opportunity to exceed expectations and build lasting trust.</p>
            </div>
            <div class="lg:pl-16 pt-12 lg:pt-0">
                <span class="text-sm font-semibold tracking-widest text-blue-500 uppercase">Vision</span>
                <div class="w-10 h-0.5 bg-blue-600 mt-2 mb-6"></div>
                <h3 class="text-2xl font-light text-white leading-tight mb-4">Setting the standard for urban mobility in the region</h3>
                <p class="text-gray-400 leading-relaxed">To become synonymous with trust and excellence in transportation — the first choice for anyone seeking a superior travel experience in Medellín.</p>
            </div>
        </div>
    </div>

    <!-- CTA Banner -->
    <div class="px-4 pb-24">
        <div class="max-w-7xl mx-auto">
            <div class="bg-gradient-to-br from-blue-600/5 to-cyan-500/5 border border-blue-500/10 rounded-2xl p-14 text-center">
                <h2 class="text-[2.2rem] font-bold text-white mb-3">Ready to Start Your Journey?</h2>
                <p class="text-gray-400 text-base max-w-xl mx-auto mb-8 leading-relaxed">Book your perfect ride today and experience Medellín like never before with our premium transportation services.</p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="contact.php" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-4 rounded-lg transition-all hover:scale-105 flex items-center justify-center gap-2">
                        Contact Us
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="services.php" class="border border-gray-700 hover:border-blue-500 text-white font-semibold px-8 py-4 rounded-lg transition-all hover:scale-105 flex items-center justify-center">
                        View Fleet
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'includes/footer.php';
    ?>


</body>

</html>