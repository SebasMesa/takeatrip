<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take A Trip - Contact Us</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="src/css/estilos.css">
    <link href='https://cdn.boxicons.com/3.0.3/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-[#070707]">

    <?php include 'includes/header.php'; ?>

    <!-- ===== HERO STRIP ===== -->
    <div class="contact-hero py-20 px-4 text-center border-b border-[#1f2937] relative overflow-hidden">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>

        <div class="relative z-10 max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/20 rounded-full px-4 py-2 mb-6 fade-up">
                <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                <span class="text-blue-400 text-sm font-medium tracking-wide">Contact Us</span>
            </div>

            <h1 class="text-[3.2rem] font-bold text-white mb-5 leading-[1.05] fade-up delay-1">
                Let's Plan Your
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">
                    Perfect Ride
                </span>
            </h1>

            <p class="text-gray-400 text-lg md:text-xl max-w-xl mx-auto fade-up delay-2">
                Tell us where you're headed — we'll handle the rest. Fast quotes, bilingual support, and zero stress.
            </p>
        </div>
    </div>


    <!-- ===== MAIN CONTACT SECTION ===== -->
    <section class="py-24 px-4" id="contact">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-5 gap-12 items-start">

                <!-- LEFT: Info panel (2 cols) -->
                <div class="lg:col-span-2 space-y-6 fade-up delay-2">

                    <div>
                        <h2 class="font-display text-3xl font-bold text-white mb-3">
                            Get in Touch
                        </h2>
                        <p class="text-gray-400 leading-relaxed text-sm">
                            Whether it's a last-minute airport run or a custom tour of Antioquia — we're one message away.
                        </p>
                    </div>

                    <!-- Contact cards -->
                    <div class="space-y-3">

                        <a href="tel:+573001234567" class="contact-card flex items-center gap-4 no-underline group">
                            <div class="icon-wrap flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 uppercase tracking-widest mb-0.5">Phone</p>
                                <p class="text-white font-semibold group-hover:text-blue-400 transition-colors">+57 300 123 4567</p>
                            </div>
                        </a>

                        <a href="mailto:info@takeatrip.com" class="contact-card flex items-center gap-4 no-underline group">
                            <div class="icon-wrap flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 uppercase tracking-widest mb-0.5">Email</p>
                                <p class="text-white font-semibold group-hover:text-blue-400 transition-colors">info@takeatrip.com</p>
                            </div>
                        </a>

                        <div class="contact-card flex items-center gap-4">
                            <div class="icon-wrap flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 uppercase tracking-widest mb-0.5">Location</p>
                                <p class="text-white font-semibold">El Poblado, Medellín</p>
                            </div>
                        </div>

                    </div>

                    <!-- WhatsApp CTA -->
                    <div class="rounded-2xl overflow-hidden border border-green-500/20 bg-gradient-to-br from-green-900/20 to-transparent p-6">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="wa-pulse relative">
                                <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <p class="text-white font-bold text-lg leading-tight">Chat on WhatsApp</p>
                                <p class="text-green-400 text-sm">Typically replies in minutes</p>
                            </div>
                        </div>
                        <a href="https://wa.me/573001234567?text=Hi!%20I%20want%20to%20book%20a%20ride%20with%20Take%20A%20Trip."
                           target="_blank"
                           class="flex items-center justify-center gap-2 w-full bg-green-500 hover:bg-green-400 text-white font-bold py-3 px-6 rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-green-500/30 text-sm">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            Start a conversation
                        </a>
                    </div>

                    <!-- Business hours -->
                    <div class="contact-card">
                        <p class="text-xs text-gray-500 uppercase tracking-widest mb-4">Business Hours</p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400 text-sm">Monday – Friday</span>
                                <span class="text-white text-sm font-medium">6:00 AM – 10:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400 text-sm">Saturday – Sunday</span>
                                <span class="text-white text-sm font-medium">7:00 AM – 9:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center pt-2 border-t border-white/5">
                                <span class="text-gray-400 text-sm">Airport Transfers</span>
                                <span class="text-blue-400 text-sm font-semibold">24 / 7</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- RIGHT: Form (3 cols) -->
                <div class="lg:col-span-3 relative fade-up delay-3">
                    <!-- Form card -->
                    <div class="relative bg-white/[0.025] border border-white/8 rounded-3xl p-8 md:p-10 overflow-hidden" id="formCard">

                        <!-- Subtle top accent line -->
                        <div class="absolute top-0 left-12 right-12 h-px bg-gradient-to-r from-transparent via-blue-500/50 to-transparent"></div>

                        <div id="formContent">
                            <h3 class="font-display text-2xl font-bold text-white mb-1">Send a Message</h3>
                            <p class="text-gray-500 text-sm mb-8">We'll respond within 15 minutes during business hours.</p>

                            <form id="contactForm" novalidate>

                                <!-- Name & Email row -->
                                <div class="grid sm:grid-cols-2 gap-5 mb-5">
                                    <div>
                                        <label class="form-label">Full Name *</label>
                                        <input type="text" id="name" class="form-input" placeholder="Maria González" required>
                                        <p class="text-red-400 text-xs mt-1 hidden" id="nameErr">Please enter your name.</p>
                                    </div>
                                    <div>
                                        <label class="form-label">Email *</label>
                                        <input type="email" id="email" class="form-input" placeholder="maria@email.com" required>
                                        <p class="text-red-400 text-xs mt-1 hidden" id="emailErr">Enter a valid email address.</p>
                                    </div>
                                </div>

                                <!-- Phone & Date row -->
                                <div class="grid sm:grid-cols-2 gap-5 mb-5">
                                    <div>
                                        <label class="form-label">WhatsApp / Phone</label>
                                        <input type="tel" id="phone" class="form-input" placeholder="+57 300 000 0000">
                                    </div>
                                    <div>
                                        <label class="form-label">Preferred Date</label>
                                        <input type="date" id="date" class="form-input">
                                    </div>
                                </div>

                                <!-- Service chips -->
                                <div class="mb-5">
                                    <label class="form-label">Service Needed</label>
                                    <div class="flex flex-wrap gap-2" id="chipGroup">
                                        <div class="service-chip" data-value="airport">✈ Airport Transfer</div>
                                        <div class="service-chip" data-value="city">🏙 City Tour</div>
                                        <div class="service-chip" data-value="corporate">💼 Corporate</div>
                                        <div class="service-chip" data-value="events">🎉 Special Events</div>
                                        <div class="service-chip" data-value="daytrip">🌄 Day Trip</div>
                                        <div class="service-chip" data-value="other">✦ Other</div>
                                    </div>
                                    <input type="hidden" id="service" value="">
                                </div>

                                <!-- Passengers -->
                                <div class="mb-5">
                                    <label class="form-label">Number of Passengers</label>
                                    <div class="flex gap-2" id="paxGroup">
                                        <?php foreach (['1', '2', '3', '4', '5', '6', '7+'] as $p): ?>
                                        <button type="button" class="pax-btn flex-1 py-2.5 text-sm font-semibold rounded-lg border border-white/10 text-gray-400 bg-transparent hover:border-blue-500/50 hover:text-white transition-all duration-200" data-pax="<?= $p ?>"><?= $p ?></button>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="mb-7">
                                    <label class="form-label">Message *</label>
                                    <textarea id="message" class="form-input resize-none" rows="4"
                                        placeholder="Tell us your pickup location, destination, and any special requests..." required></textarea>
                                    <p class="text-red-400 text-xs mt-1 hidden" id="msgErr">Please include a message.</p>
                                </div>

                                <!-- Privacy note -->
                                <div class="flex items-start gap-3 mb-7 p-4 rounded-xl bg-blue-500/5 border border-blue-500/10">
                                    <svg class="w-4 h-4 text-blue-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                    <p class="text-gray-500 text-xs leading-relaxed">
                                        Your data is safe. We'll only use it to respond to your inquiry and will never share it with third parties.
                                    </p>
                                </div>

                                <button type="submit" class="btn-submit" id="submitBtn">
                                    <span class="btn-text flex items-center justify-center gap-2">
                                        Send Message
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </span>
                                    <span class="btn-spinner">
                                        <svg class="spinner w-5 h-5" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                                        </svg>
                                    </span>
                                </button>
                            </form>
                        </div>

                        <!-- Success overlay -->
                        <div class="success-overlay" id="successOverlay">
                            <div class="text-center px-8">
                                <div class="w-20 h-20 rounded-full bg-green-500/15 border border-green-500/30 flex items-center justify-center mx-auto mb-6">
                                    <svg class="w-10 h-10 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <h3 class="font-display text-3xl font-bold text-white mb-3">Message Sent!</h3>
                                <p class="text-gray-400 mb-8 max-w-sm mx-auto">We've received your inquiry and will get back to you within 15 minutes. Check your WhatsApp or email!</p>
                                <button onclick="resetForm()" class="btn-submit" style="max-width:200px;margin:0 auto;">
                                    <span class="btn-text">Send Another</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== MAP / COVERAGE STRIP ===== -->
    <div class="py-16 px-4 border-t border-white/5">
        <div class="max-w-6xl mx-auto text-center mb-12 fade-up">
            <h2 class="font-display text-3xl font-bold text-white mb-3">
                We Operate Across <span class="text-blue-400">Medellín & Antioquia</span>
            </h2>
            <p class="text-gray-500">From El Poblado to Guatapé — we've got you covered.</p>
        </div>

        <div class="max-w-6xl mx-auto grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-3">
            <?php
            $zones = [
                ['name' => 'El Poblado', 'icon' => '🏙'],
                ['name' => 'Laureles', 'icon' => '🌿'],
                ['name' => 'Envigado', 'icon' => '🌆'],
                ['name' => 'Sabaneta', 'icon' => '🏡'],
                ['name' => 'Rionegro Airport', 'icon' => '✈'],
                ['name' => 'Guatapé', 'icon' => '🏞'],
            ];
            foreach ($zones as $z):
            ?>
            <div class="contact-card text-center py-5 fade-up">
                <span class="text-2xl block mb-2"><?= $z['icon'] ?></span>
                <p class="text-white text-sm font-semibold"><?= $z['name'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script>
    // ── Service chip selection ──
    document.querySelectorAll('.service-chip').forEach(chip => {
        chip.addEventListener('click', () => {
            document.querySelectorAll('.service-chip').forEach(c => c.classList.remove('active'));
            chip.classList.add('active');
            document.getElementById('service').value = chip.dataset.value;
        });
    });

    // ── Passenger buttons ──
    document.querySelectorAll('.pax-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.pax-btn').forEach(b => {
                b.classList.remove('border-blue-500', 'text-blue-400', 'bg-blue-500/10');
                b.classList.add('border-white/10', 'text-gray-400');
            });
            btn.classList.remove('border-white/10', 'text-gray-400');
            btn.classList.add('border-blue-500', 'text-blue-400', 'bg-blue-500/10');
        });
    });

    // ── Form validation & submit ──
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let valid = true;

        const name    = document.getElementById('name');
        const email   = document.getElementById('email');
        const message = document.getElementById('message');

        // Name
        if (!name.value.trim()) {
            document.getElementById('nameErr').classList.remove('hidden');
            name.classList.add('border-red-500/60');
            valid = false;
        } else {
            document.getElementById('nameErr').classList.add('hidden');
            name.classList.remove('border-red-500/60');
        }

        // Email
        const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRe.test(email.value.trim())) {
            document.getElementById('emailErr').classList.remove('hidden');
            email.classList.add('border-red-500/60');
            valid = false;
        } else {
            document.getElementById('emailErr').classList.add('hidden');
            email.classList.remove('border-red-500/60');
        }

        // Message
        if (!message.value.trim()) {
            document.getElementById('msgErr').classList.remove('hidden');
            message.classList.add('border-red-500/60');
            valid = false;
        } else {
            document.getElementById('msgErr').classList.add('hidden');
            message.classList.remove('border-red-500/60');
        }

        if (!valid) return;

        // Simulate loading
        const btn = document.getElementById('submitBtn');
        btn.classList.add('loading');
        btn.disabled = true;

        setTimeout(() => {
            btn.classList.remove('loading');
            btn.disabled = false;
            document.getElementById('successOverlay').classList.add('show');
        }, 1800);
    });

    function resetForm() {
        document.getElementById('contactForm').reset();
        document.getElementById('successOverlay').classList.remove('show');
        document.querySelectorAll('.service-chip').forEach(c => c.classList.remove('active'));
        document.querySelectorAll('.pax-btn').forEach(b => {
            b.classList.remove('border-blue-500', 'text-blue-400', 'bg-blue-500/10');
            b.classList.add('border-white/10', 'text-gray-400');
        });
        document.getElementById('service').value = '';
    }

    // ── Intersection observer for fade-ups ──
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-up').forEach(el => {
        el.style.animationPlayState = 'paused';
        observer.observe(el);
    });
    </script>

</body>
</html>