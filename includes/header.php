<header class="header sticky top-0 bg-[#070707] shadow-md z-50 border-b border-[#262626]">
    <nav class="contenedor py-[20px] flex justify-between items-center px-[1rem] md:px-0">
        <div>
            <!-- <img class="w-[160px]" src="src/images/logobig.png" alt=""> -->
            <h1 class="text-[2rem] font-bold logo text-[#004AAD]">Take a Trip</h1>

        </div>

        <div class="hidden md:flex">
            <ul class="text-[1.1rem] flex items-center">
                <li class="inline-block mx-4"><a href="index.php" class="text-gray-300 hover:text-gray-400 <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a></li>
                <li class="inline-block mx-4"><a href="services.php" class="text-gray-300 hover:text-gray-400 <?php echo (basename($_SERVER['PHP_SELF']) == 'services.php') ? 'active' : ''; ?>">Services</a></li>
                <li class="inline-block mx-4"><a href="about.php" class="text-gray-300 hover:text-gray-400 <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>">About Us</a></li>
                <li class="inline-block mx-4"><a href="contact.php" class="text-gray-300 hover:text-gray-400 <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="modo" class="sr-only peer">

                    <div class="w-14 h-8 bg-[#1a1a1a] rounded-full peer peer-checked:bg-gray-700 transition-colors duration-300"></div>

                    <div class="absolute left-1 top-1 h-6 w-6 bg-[#0f0f0f] border border-gray-600 rounded-full transition-all duration-300 peer-checked:translate-x-6 flex items-center justify-center">
                        <!-- <i class='bx  bx-sun text-yellow-300 '></i> -->
                        <i class='bx  bx-moon text-gray-600'></i>
                    </div>
                </label>

                <a href="#" class="ml-[3.5rem] bg-[#004AAD] text-white py-2 px-4 rounded hover:bg-blue-600">Book Now</a>



            </ul>
        </div>
    </nav>
</header>