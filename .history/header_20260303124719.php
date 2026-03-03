<?php
// বর্তমান ফাইলের নাম নেওয়া হচ্ছে
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header id="mainHeader" class="fixed top-0 left-0 right-0 z-[60] transition-all duration-500">
    <div class="max-w-[1600px] mx-auto px-6 md:px-10 py-5 md:py-6 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <a href="index.php">
                <img src="img/logo_white.png" alt="Apex Law Logo" class="h-10 md:h-12 w-auto object-contain">
            </a>
        </div>

        <nav class="hidden lg:flex items-center gap-10 font-medium text-sm uppercase tracking-widest">
            <a href="index.php"
                class="<?= ($current_page == 'index.php') ? 'text-primary' : 'text-gray-300' ?> hover:text-primary transition-colors duration-300">Home</a>
            <a href="about.php"
                class="<?= ($current_page == 'about.php') ? 'text-primary' : 'text-gray-300' ?> hover:text-primary transition-colors duration-300">About
                Us</a>
            <a href="services.php"
                class="<?= ($current_page == 'services.php') ? 'text-primary' : 'text-gray-300' ?> hover:text-primary transition-colors duration-300">Services</a>
            <a href="blogs.php"
                class="<?= ($current_page == 'blogs.php') ? 'text-primary' : 'text-gray-300' ?> hover:text-primary transition-colors duration-300">Blogs</a>
            <a href="contact.php"
                class="<?= ($current_page == 'contact.php') ? 'text-primary' : 'text-gray-300' ?> hover:text-primary transition-colors duration-300">Contact</a>
        </nav>

        <div class="flex items-center gap-4">
            <a href="#"
                class="hidden lg:inline-block bg-primary text-white font-bold px-7 py-2.5 rounded-md shadow-lg shadow-primary/20 hover:bg-white hover:text-black transition-all duration-300 text-sm">
                Book Appointment
            </a>
            <button id="openMenu"
                class="lg:hidden text-white focus:outline-none p-2 hover:text-primary transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</header>

<div id="mobileMenuOverlay"
    class="fixed inset-0 z-[100] bg-darkbg p-8 flex flex-col lg:hidden translate-x-full transition-transform duration-500 ease-in-out">
    <div class="flex justify-between items-center mb-16">
        <div class="flex items-center">
            <img src="img/logo_white.png" alt="Apex Law Logo" class="h-10 w-auto object-contain">
        </div>
        <button id="closeMenu"
            class="w-12 h-12 flex items-center justify-center rounded-full border border-white/10 text-white text-3xl focus:outline-none hover:bg-white/10 transition">&times;</button>
    </div>

    <nav class="flex flex-col gap-6 text-left">
        <a href="index.php"
            class="text-lg font-bold <?= ($current_page == 'index.php') ? 'text-primary' : 'text-white' ?> hover:text-primary transition-colors py-2 border-b border-white/5">Home</a>
        <a href="about.php"
            class="text-lg font-bold <?= ($current_page == 'about.php') ? 'text-primary' : 'text-white' ?> hover:text-primary transition-colors py-2 border-b border-white/5">About
            Us</a>
        <a href="services.php"
            class="text-lg font-bold <?= ($current_page == 'services.php') ? 'text-primary' : 'text-white' ?> hover:text-primary transition-colors py-2 border-b border-white/5">Services</a>
        <a href="blogs.php"
            class="text-lg font-bold <?= ($current_page == 'blogs.php') ? 'text-primary' : 'text-primary' ?> hover:text-primary transition-colors py-2 border-b border-white/5">Blogs</a>
        <a href="contact.php"
            class="text-lg font-bold <?= ($current_page == 'contact.php') ? 'text-primary' : 'text-white' ?> hover:text-primary transition-colors py-2 border-b border-white/5">Contact</a>
    </nav>

    <div class="mt-auto">
        <a href="#"
            class="block lg:inline-block text-center bg-primary text-white font-bold px-7 py-2.5 rounded-md shadow-lg shadow-primary/20 hover:bg-white hover:text-black transition-all duration-300 text-sm">
            Book Appointment
        </a>
    </div>
</div>