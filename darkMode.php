<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo Oscuro/Claro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        body {
            background-color: #1a1a1a;
            color: #ffffff;
        }

        body.light-mode {
            background-color: #ffffff;
            color: #1a1a1a;
        }

        .card {
            background-color: #2d2d2d;
            color: #ffffff;
        }

        body.light-mode .card {
            background-color: #f3f4f6;
            color: #1a1a1a;
        }

        .theme-toggle {
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .theme-toggle:hover {
            transform: scale(1.1);
        }

        .sun-icon {
            display: none;
        }

        body.light-mode .sun-icon {
            display: block;
        }

        body.light-mode .moon-icon {
            display: none;
        }

        .moon-icon {
            display: block;
        }
    </style>
</head>
<body>
    
    <div class="fixed top-6 right-6 z-50">
        <button id="themeToggle" class="theme-toggle bg-gray-700 hover:bg-gray-600 p-3 rounded-full shadow-lg">
            <svg class="moon-icon w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg class="sun-icon w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>

    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold mb-8">Mi Página con Modo Oscuro/Claro</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="card p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-4">Tarjeta 1</h2>
                <p>Este es un contenido de ejemplo que se adapta al tema seleccionado.</p>
            </div>
            
            <div class="card p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-4">Tarjeta 2</h2>
                <p>El modo oscuro es ideal para trabajar de noche.</p>
            </div>
        </div>
    </div>


    <!-- FAQ Section -->
<section class="relative bg-gradient-to-b from-gray-900 via-slate-900 to-gray-900 py-24 px-4 overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-72 h-72 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse delay-700"></div>
    </div>

    <div class="max-w-6xl mx-auto relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-5xl md:text-6xl font-bold text-white mb-4">
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
                <div class="faq-item group bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-2xl p-6 hover:bg-gray-800/70 hover:border-blue-500/50 transition-all duration-300 cursor-pointer">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-white text-lg font-semibold mb-3 group-hover:text-blue-400 transition-colors">
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- CTA Bottom -->
        <div class="mt-16 text-center">
            <div class="inline-block bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-2xl p-8 hover:border-blue-500/50 transition-all duration-300">
                <h3 class="text-white text-2xl font-bold mb-3">Still have questions?</h3>
                <p class="text-gray-400 mb-6">Our support team is here to help 24/7</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-all duration-300 hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Contact Us
                    </a>
                    <a href="https://wa.me/573001234567" class="inline-flex items-center justify-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition-all duration-300 hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ JavaScript -->
<script>
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

<style>
@keyframes pulse {
    0%, 100% { opacity: 0.1; }
    50% { opacity: 0.2; }
}

.animate-pulse {
    animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

.delay-700 {
    animation-delay: 700ms;
}

.faq-answer {
    transition: max-height 0.3s ease-in-out;
}
</style>

    <script>
        function toggleTheme() {
            const body = document.body;
            const isLight = body.classList.contains('light-mode');

            if (isLight) {
                body.classList.remove('light-mode');
                localStorage.setItem('theme', 'dark');
            } else {
                body.classList.add('light-mode');
                localStorage.setItem('theme', 'light');
            }
        }

        window.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme');
            
            if (savedTheme === 'light') {
                document.body.classList.add('light-mode');
            }
        });

        document.getElementById('themeToggle').addEventListener('click', toggleTheme);
    </script>

</body>
</html>
