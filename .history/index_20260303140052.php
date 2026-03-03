<!-- head section -->
<?php include('head.php') ?>

<body class="bg-darkbg text-white font-base font-body">
    <!--hero section  -->
    <section id="hero" class="relative min-h-screen mobile-hero-section flex flex-col lg:block overflow-hidden">

        <?php include('header.php') ?>

        <div class="absolute inset-0 z-1">
            <div class="relative w-full h-full overflow-hidden">
                <div class="hero-slide absolute inset-0 opacity-100 transition-opacity duration-1000 ease-in-out">
                    <div class="w-full h-full bg-cover bg-no-repeat lg:bg-center"
                        style="background-image: url('img/hero.png');"></div>
                </div>
                <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
                    <div class="w-full h-full bg-cover bg-no-repeat lg:bg-center"
                        style="background-image: url('img/s (3).png');"></div>
                </div>
                <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
                    <div class="w-full h-full bg-cover bg-no-repeat lg:bg-center"
                        style="background-image: url('img/process.png');"></div>
                </div>

                <div class="hidden lg:block absolute inset-0 hero-gradient z-2"></div>
                <div class="lg:hidden absolute inset-0 mobile-overlay z-2"></div>
            </div>
        </div>

        <div
            class="mobile-content-wrapper hero-content-desktop relative z-10 max-w-[1600px] mx-auto px-6 md:px-10 flex-1 flex flex-col justify-center lg:pt-48 lg:pb-20">
            <div class="max-w-3xl">
                <p
                    class="text-white font-medium flex items-center gap-3 mb-4 lg:mb-6 tracking-wide text-xs md:text-base">
                    <span>→</span> Stonebridge Legal Solutions
                </p>

                <h1 class="text-3xl md:text-5xl font-bold leading-[1.2] md:leading-[1.1] mb-6 md:mb-10 text-white">
                    Your Trusted Partner for UK Immigration & Legal Solutions
                </h1>
                <p class="space-y-3 md:space-y-4 mb-6 md:mb-8 text-gray-300 text-sm md:text-lg">
                    Stonebridge Led by a UK-qualified Solicitor, Barrister, and IAA Level 3 Immigration Adviser,
                    providing trusted immigration advice and legal representation.
                </p>

                <ul class="space-y-3 md:space-y-4 mb-8 md:mb-12 text-gray-300 text-sm md:text-lg">
                    <li class="flex items-center gap-3 md:gap-4"><span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                        Expert Legal Guidance</li>
                    <li class="flex items-center gap-3 md:gap-4"><span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                        Proven Success Record</li>
                    <li class="flex items-center gap-3 md:gap-4"><span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                        Transparent & Reliable Service</li>
                </ul>

                <div class="flex flex-row items-center gap-3 sm:gap-4">
                    <a href="#"
                        class="flex-1 sm:flex-none bg-white text-black text-center font-bold px-6 py-2.5 md:py-3 rounded-md shadow-lg shadow-white/10 hover:bg-gray-100 transition duration-300 text-[13px] sm:text-base whitespace-nowrap">Our
                        Services</a>
                    <a href="#"
                        class="flex-1 sm:flex-none bg-white/10 backdrop-blur-md text-white text-center font-bold px-6 py-2.5 md:py-3 rounded-md border border-white/20 shadow-lg shadow-black/40 hover:bg-black/40 transition duration-300 text-[13px] sm:text-base whitespace-nowrap">Happy
                        Clients</a>
                </div>
            </div>
        </div>

        <div
            class="hidden lg:flex absolute bottom-0 left-0 right-0 z-20 w-full max-w-[1600px] mx-auto px-10 pb-10 flex items-center justify-between text-gray-400 text-xs border-t border-white/10 pt-6">
            <div class="flex items-center gap-2 italic">
                <span class="text-white opacity-50">•</span> Transparent & Reliable Legal Service
            </div>
            <div class="flex flex-col items-center gap-1 animate-bounce cursor-pointer hover:text-white transition">
                <span class="uppercase tracking-widest text-[9px]">Scroll to Explore</span>
                <span class="text-lg">↓</span>
            </div>
        </div>
    </section>


    <!--  testimonial section-->

    <section id="testimonials" class="relative py-16 lg:py-20 bg-white overflow-hidden border-t border-gray-100">
        <div class="relative z-10 max-w-[1600px] mx-auto px-6 md:px-10">

            <div class="max-w-3xl mb-16">
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-10 h-[2px] bg-primary"></span>
                    <span class="text-primary font-bold text-xs uppercase tracking-widest"> Our Happy Clients</span>
                </div>
                <h2 class="text-2xl md:text-4xl font-black text-black leading-tight mb-8">
                    Real
                    <span class="text-primary italic">Clients. </span> Real Success
                </h2>

            </div>



            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div
                    class="bg-gray-50 border-2 border-dotted border-gray-200 p-8 rounded-2xl flex flex-col h-full hover:border-primary transition-all duration-300 group">
                    <div class="flex items-center gap-1 mb-6 text-primary">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p class="text-gray-600 text-base leading-relaxed mb-4 line-clamp-3 testimonial-text">
                        "Stonebridge Legal Solutions provided exceptional support during my skilled worker visa
                        application. Their attention to detail was unmatched and the solicitor guided me through every
                        complex step with absolute clarity and professionalism. I couldn't have asked for a better team
                        to represent my case in the UK."
                    </p>
                    <button onclick="openModal(this)"
                        class="text-primary text-sm font-bold hover:text-black mb-6 text-left w-fit hidden read-more-btn">
                        Read More +
                    </button>

                    <div class="mt-auto pt-6 border-t border-gray-200 flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold shadow-md shadow-primary/20">
                            JD</div>
                        <div class="user-info">
                            <h4 class="text-black font-bold">John Doe</h4>
                            <p class="text-gray-500 text-xs">Skilled Worker Visa Client</p>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-gray-50 border-2 border-dotted border-gray-200 p-8 rounded-2xl flex flex-col h-full hover:border-primary transition-all duration-300 group">
                    <div class="flex items-center gap-1 mb-6 text-primary">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p class="text-gray-600 text-base leading-relaxed mb-4 line-clamp-3 testimonial-text">
                        "Highly recommended for anyone looking for reliable immigration advice. They handled my sponsor
                        license suspension with great care and we got it reinstated within a very short time. The level
                        of communication was outstanding."
                    </p>
                    <button onclick="openModal(this)"
                        class="text-primary text-sm font-bold hover:text-black mb-6 text-left w-fit hidden read-more-btn">
                        Read More +
                    </button>
                    <div class="mt-auto pt-6 border-t border-gray-200 flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold shadow-md shadow-primary/20">
                            SA</div>
                        <div class="user-info">
                            <h4 class="text-black font-bold">Sarah Ahmed</h4>
                            <p class="text-gray-500 text-xs">Business Owner</p>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-gray-50 border-2 border-dotted border-gray-200 p-8 rounded-2xl flex flex-col h-full hover:border-primary transition-all duration-300 group">
                    <div class="flex items-center gap-1 mb-6 text-primary">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p class="text-gray-600 text-base leading-relaxed mb-4 line-clamp-3 testimonial-text">
                        "Very knowledgeable team. I was confused about spouse visa requirements, but they simplified
                        everything. Now I'm with my family in London. Professionalism at its best!"
                    </p>
                    <button onclick="openModal(this)"
                        class="text-primary text-sm font-bold hover:text-black mb-6 text-left w-fit hidden read-more-btn">
                        Read More +
                    </button>
                    <div class="mt-auto pt-6 border-t border-gray-200 flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold shadow-md shadow-primary/20">
                            RK</div>
                        <div class="user-info">
                            <h4 class="text-black font-bold">Robert King</h4>
                            <p class="text-gray-500 text-xs">Family Visa Client</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-gray-50 border-2 border-dotted border-gray-200 p-8 rounded-2xl flex flex-col h-full hover:border-primary transition-all duration-300 group">
                    <div class="flex items-center gap-1 mb-6 text-primary">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p class="text-gray-600 text-base leading-relaxed mb-4 line-clamp-3 testimonial-text">
                        "Highly recommended for anyone looking for reliable immigration advice. They handled my sponsor
                        license suspension with great care and we got it reinstated within a very short time. The level
                        of communication was outstanding."
                    </p>
                    <button onclick="openModal(this)"
                        class="text-primary text-sm font-bold hover:text-black mb-6 text-left w-fit hidden read-more-btn">
                        Read More +
                    </button>
                    <div class="mt-auto pt-6 border-t border-gray-200 flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold shadow-md shadow-primary/20">
                            SA</div>
                        <div class="user-info">
                            <h4 class="text-black font-bold">Sarah Ahmed</h4>
                            <p class="text-gray-500 text-xs">Business Owner</p>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-gray-50 border-2 border-dotted border-gray-200 p-8 rounded-2xl flex flex-col h-full hover:border-primary transition-all duration-300 group">
                    <div class="flex items-center gap-1 mb-6 text-primary">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p class="text-gray-600 text-base leading-relaxed mb-4 line-clamp-3 testimonial-text">
                        "Stonebridge Legal Solutions provided exceptional support during my skilled worker visa
                        application. Their attention to detail was unmatched and the solicitor guided me through every
                        complex step with absolute clarity and professionalism. I couldn't have asked for a better team
                        to represent my case in the UK."
                    </p>
                    <button onclick="openModal(this)"
                        class="text-primary text-sm font-bold hover:text-black mb-6 text-left w-fit hidden read-more-btn">
                        Read More +
                    </button>

                    <div class="mt-auto pt-6 border-t border-gray-200 flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold shadow-md shadow-primary/20">
                            JD</div>
                        <div class="user-info">
                            <h4 class="text-black font-bold">John Doe</h4>
                            <p class="text-gray-500 text-xs">Skilled Worker Visa Client</p>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-gray-50 border-2 border-dotted border-gray-200 p-8 rounded-2xl flex flex-col h-full hover:border-primary transition-all duration-300 group">
                    <div class="flex items-center gap-1 mb-6 text-primary">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p class="text-gray-600 text-base leading-relaxed mb-4 line-clamp-3 testimonial-text">
                        "Highly recommended for anyone looking for reliable immigration advice. They handled my sponsor
                        license suspension with great care and we got it reinstated within a very short time. The level
                        of communication was outstanding."
                    </p>
                    <button onclick="openModal(this)"
                        class="text-primary text-sm font-bold hover:text-black mb-6 text-left w-fit hidden read-more-btn">
                        Read More +
                    </button>
                    <div class="mt-auto pt-6 border-t border-gray-200 flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold shadow-md shadow-primary/20">
                            SA</div>
                        <div class="user-info">
                            <h4 class="text-black font-bold">Sarah Ahmed</h4>
                            <p class="text-gray-500 text-xs">Business Owner</p>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-gray-50 border-2 border-dotted border-gray-200 p-8 rounded-2xl flex flex-col h-full hover:border-primary transition-all duration-300 group">
                    <div class="flex items-center gap-1 mb-6 text-primary">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p class="text-gray-600 text-base leading-relaxed mb-4 line-clamp-3 testimonial-text">
                        "Very knowledgeable team. I was confused about spouse visa requirements, but they simplified
                        everything. Now I'm with my family in London. Professionalism at its best!"
                    </p>
                    <button onclick="openModal(this)"
                        class="text-primary text-sm font-bold hover:text-black mb-6 text-left w-fit hidden read-more-btn">
                        Read More +
                    </button>
                    <div class="mt-auto pt-6 border-t border-gray-200 flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold shadow-md shadow-primary/20">
                            RK</div>
                        <div class="user-info">
                            <h4 class="text-black font-bold">Robert King</h4>
                            <p class="text-gray-500 text-xs">Family Visa Client</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-gray-50 border-2 border-dotted border-gray-200 p-8 rounded-2xl flex flex-col h-full hover:border-primary transition-all duration-300 group">
                    <div class="flex items-center gap-1 mb-6 text-primary">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p class="text-gray-600 text-base leading-relaxed mb-4 line-clamp-3 testimonial-text">
                        "Highly recommended for anyone looking for reliable immigration advice. They handled my sponsor
                        license suspension with great care and we got it reinstated within a very short time. The level
                        of communication was outstanding."
                    </p>
                    <button onclick="openModal(this)"
                        class="text-primary text-sm font-bold hover:text-black mb-6 text-left w-fit hidden read-more-btn">
                        Read More +
                    </button>
                    <div class="mt-auto pt-6 border-t border-gray-200 flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold shadow-md shadow-primary/20">
                            SA</div>
                        <div class="user-info">
                            <h4 class="text-black font-bold">Sarah Ahmed</h4>
                            <p class="text-gray-500 text-xs">Business Owner</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-16 text-center">


                <a href="#"
                    class="inline-block bg-primary text-white font-bold px-8 py-3.5 rounded-md hover:bg-black transition-all duration-300 shadow-xl shadow-black/10 text-sm">
                    View All Testimonials
                </a>
            </div>
        </div>

        <div id="testimonialModal" class="fixed inset-0 z-[200] hidden items-center justify-center px-4">
            <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal()"></div>

            <div class="relative bg-white w-full max-w-lg p-8 md:p-12 rounded-2xl shadow-2xl transform transition-all">
                <button onclick="closeModal()"
                    class="absolute top-5 right-5 text-gray-400 hover:text-black text-4xl leading-none">&times;</button>

                <div class="flex items-center gap-1 mb-6 text-primary">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>

                <div id="modalContent" class="text-gray-700 text-lg leading-relaxed mb-8">
                </div>

                <div id="modalUser" class="pt-6 border-t border-gray-100 flex items-center gap-4">
                </div>
            </div>
        </div>
    </section>


    <!-- services section -->
    <section id="services" class="bg-white py-16 lg:py-20 overflow-hidden">
        <div class="max-w-[1600px] mx-auto px-6 md:px-10 relative">

            <div
                class="flex flex-col lg:flex-row justify-between items-start lg:items-end gap-6 lg:gap-10 mb-12 lg:mb-16">
                <div class="max-w-2xl">


                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-10 h-[2px] bg-primary"></span>
                        <span class="text-primary font-bold text-xs uppercase tracking-widest"> Our Service</span>
                    </div>
                    <h2 class="text-2xl md:text-4xl font-black text-black leading-tight mb-8">
                        Complete
                        <span class="text-primary italic">Immigration </span> Services
                    </h2>


                </div>
                <div class="max-w-md lg:pb-2">
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        We provide comprehensive UK immigration advice and legal services at the highest level permitted
                        by regulation, covering a wide range of personal and business immigration matters.
                    </p>
                </div>
            </div>
        </div>

        <div class="relative w-full">
            <!-- <div class="hidden lg:block absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-[#86898f] to-transparent z-20 pointer-events-none"></div>
        <div class="hidden lg:block absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-[#0a0d13] to-transparent z-20 pointer-events-none"></div> -->

            <div class="flex gap-6 w-max animate-scroll px-6 md:px-10 hover:pause-animation">

                <div
                    class="relative w-[85vw] sm:w-[320px] lg:w-[350px] xl:w-[380px] shrink-0 h-[450px] lg:h-[500px] rounded-2xl overflow-hidden group/card cursor-pointer shadow-lg">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover/card:scale-110"
                        style="background-image: url('img/s (1).png');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#0a0d13] via-[#0a0d13]/70 to-transparent opacity-95">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                        <h3 class="text-white text-xl md:text-2xl font-bold mb-4">Sponsorship Licence</h3>
                        <ul class="space-y-2 mb-6">
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Sponsor Licence Application</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Sponsor Licence Renewal</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Sponsor Licence Suspension</a></li>
                        </ul>
                        <a href="#"
                            class="text-white text-sm font-semibold flex items-center gap-2 group-hover/card:text-primary transition-colors">
                            Learn more <span class="group-hover/card:translate-x-1 transition-transform">→</span>
                        </a>
                    </div>
                </div>

                <div
                    class="relative w-[85vw] sm:w-[320px] lg:w-[350px] xl:w-[380px] shrink-0 h-[450px] lg:h-[500px] rounded-2xl overflow-hidden group/card cursor-pointer shadow-lg">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover/card:scale-110"
                        style="background-image: url('img/s (2).png');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#0a0d13] via-[#0a0d13]/70 to-transparent opacity-95">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                        <h3 class="text-white text-xl md:text-2xl font-bold mb-4">Work Visas</h3>
                        <ul class="space-y-2 mb-6">
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Skilled Worker Visa</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Health & Care Worker Visa</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Global Business Mobility</a></li>
                        </ul>
                        <a href="#"
                            class="text-white text-sm font-semibold flex items-center gap-2 group-hover/card:text-primary transition-colors">
                            Learn more <span class="group-hover/card:translate-x-1 transition-transform">→</span>
                        </a>
                    </div>
                </div>

                <div
                    class="relative w-[85vw] sm:w-[320px] lg:w-[350px] xl:w-[380px] shrink-0 h-[450px] lg:h-[500px] rounded-2xl overflow-hidden group/card cursor-pointer shadow-lg">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover/card:scale-110"
                        style="background-image: url('img/s (3).png');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#0a0d13] via-[#0a0d13]/70 to-transparent opacity-95">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                        <h3 class="text-white text-xl md:text-2xl font-bold mb-4">Family Visas</h3>
                        <ul class="space-y-2 mb-6">
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Spouse & Partner Visa</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Fiance Visa Application</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Parent & Child Visas</a></li>
                        </ul>
                        <a href="#"
                            class="text-white text-sm font-semibold flex items-center gap-2 group-hover/card:text-primary transition-colors">
                            Learn more <span class="group-hover/card:translate-x-1 transition-transform">→</span>
                        </a>
                    </div>
                </div>

                <div
                    class="relative w-[85vw] sm:w-[320px] lg:w-[350px] xl:w-[380px] shrink-0 h-[450px] lg:h-[500px] rounded-2xl overflow-hidden group/card cursor-pointer shadow-lg">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover/card:scale-110"
                        style="background-image: url('img/s (4).png');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#0a0d13] via-[#0a0d13]/70 to-transparent opacity-95">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                        <h3 class="text-white text-xl md:text-2xl font-bold mb-4">Business Solutions</h3>
                        <ul class="space-y-2 mb-6">
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Innovator Founder Visa</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Expansion Worker Visa</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Scale-up Visa Advice</a></li>
                        </ul>
                        <a href="#"
                            class="text-white text-sm font-semibold flex items-center gap-2 group-hover/card:text-primary transition-colors">
                            Learn more <span class="group-hover/card:translate-x-1 transition-transform">→</span>
                        </a>
                    </div>
                </div>


                <div
                    class="relative w-[85vw] sm:w-[320px] lg:w-[350px] xl:w-[380px] shrink-0 h-[450px] lg:h-[500px] rounded-2xl overflow-hidden group/card cursor-pointer shadow-lg">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover/card:scale-110"
                        style="background-image: url('img/s (1).png');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#0a0d13] via-[#0a0d13]/70 to-transparent opacity-95">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                        <h3 class="text-white text-xl md:text-2xl font-bold mb-4">Sponsorship Licence</h3>
                        <ul class="space-y-2 mb-6">
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Sponsor Licence Application</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Sponsor Licence Renewal</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Sponsor Licence Suspension</a></li>
                        </ul>
                        <a href="#"
                            class="text-white text-sm font-semibold flex items-center gap-2 group-hover/card:text-primary transition-colors">
                            Learn more <span class="group-hover/card:translate-x-1 transition-transform">→</span>
                        </a>
                    </div>
                </div>

                <div
                    class="relative w-[85vw] sm:w-[320px] lg:w-[350px] xl:w-[380px] shrink-0 h-[450px] lg:h-[500px] rounded-2xl overflow-hidden group/card cursor-pointer shadow-lg">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover/card:scale-110"
                        style="background-image: url('img/s (2).png');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#0a0d13] via-[#0a0d13]/70 to-transparent opacity-95">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                        <h3 class="text-white text-xl md:text-2xl font-bold mb-4">Work Visas</h3>
                        <ul class="space-y-2 mb-6">
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Skilled Worker Visa</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Health & Care Worker Visa</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Global Business Mobility</a></li>
                        </ul>
                        <a href="#"
                            class="text-white text-sm font-semibold flex items-center gap-2 group-hover/card:text-primary transition-colors">
                            Learn more <span class="group-hover/card:translate-x-1 transition-transform">→</span>
                        </a>
                    </div>
                </div>

                <div
                    class="relative w-[85vw] sm:w-[320px] lg:w-[350px] xl:w-[380px] shrink-0 h-[450px] lg:h-[500px] rounded-2xl overflow-hidden group/card cursor-pointer shadow-lg">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover/card:scale-110"
                        style="background-image: url('img/s (3).png');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#0a0d13] via-[#0a0d13]/70 to-transparent opacity-95">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                        <h3 class="text-white text-xl md:text-2xl font-bold mb-4">Family Visas</h3>
                        <ul class="space-y-2 mb-6">
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Spouse & Partner Visa</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Fiance Visa Application</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Parent & Child Visas</a></li>
                        </ul>
                        <a href="#"
                            class="text-white text-sm font-semibold flex items-center gap-2 group-hover/card:text-primary transition-colors">
                            Learn more <span class="group-hover/card:translate-x-1 transition-transform">→</span>
                        </a>
                    </div>
                </div>

                <div
                    class="relative w-[85vw] sm:w-[320px] lg:w-[350px] xl:w-[380px] shrink-0 h-[450px] lg:h-[500px] rounded-2xl overflow-hidden group/card cursor-pointer shadow-lg">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover/card:scale-110"
                        style="background-image: url('img/s (4).png');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#0a0d13] via-[#0a0d13]/70 to-transparent opacity-95">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                        <h3 class="text-white text-xl md:text-2xl font-bold mb-4">Business Solutions</h3>
                        <ul class="space-y-2 mb-6">
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Innovator Founder Visa</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Expansion Worker Visa</a></li>
                            <li><a href="sub-service.php"
                                    class="text-gray-300 text-sm hover:text-primary transition flex items-center gap-2">•
                                    Scale-up Visa Advice</a></li>
                        </ul>
                        <a href="#"
                            class="text-white text-sm font-semibold flex items-center gap-2 group-hover/card:text-primary transition-colors">
                            Learn more <span class="group-hover/card:translate-x-1 transition-transform">→</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- about section -->
    <section class="relative bg-gradient-to-br from-[#1c1612] via-[#241c16] to-[#33251a] overflow-hidden ">
        <div class="flex flex-col lg:flex-row w-full max-w-[1600px] mx-auto">

            <div class="relative w-full lg:w-[45%] min-h-[500px] lg:min-h-[650px] bg-cover bg-center"
                style="background-image: url('img/bookshelf-bg.jpg');">

                <div class="absolute inset-0 bg-[#1a1410]/40 z-0"></div>

                <div class="absolute inset-0 z-10 overflow-hidden">
                    <img src="img/about.png" alt="Lawyer" class="w-full h-full object-cover object-bottom">

                    <div class="absolute top-0 inset-x-0 h-24 bg-gradient-to-b from-[#1c1612] to-transparent"></div>
                    <div class="absolute bottom-0 inset-x-0 h-32 bg-gradient-to-t from-[#1c1612] to-transparent"></div>
                    <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-[#1c1612] to-transparent"></div>
                    <div class="absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-[#241c16] to-transparent"></div>
                </div>

                <div class="absolute bottom-0 left-0 w-[90%] md:w-[85%] bg-[#e0d0bd] p-6 md:p-8 z-20"
                    style="clip-path: polygon(0 0, 85% 0, 100% 100%, 0 100%);">
                    <div class="flex items-center gap-4 md:gap-6">
                        <div
                            class="w-12 h-12 md:w-14 md:h-14 bg-[#a67c52] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                                </path>
                            </svg>
                        </div>
                        <div class="pt-1">
                            <p
                                class="text-[9px] md:text-[11px] font-bold tracking-[0.15em] text-[#4a3525] uppercase mb-1 md:mb-2">
                                Get your free consultation today!</p>
                            <h3 class="text-2xl md:text-3xl lg:text-4xl font-serif text-[#1a1109]">+447988138221</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative w-full lg:w-[55%] px-6 py-16 lg:py-20 lg:pl-16 flex items-center">

                <div class="relative w-full max-w-2xl pl-8 md:pl-10 py-10">
                    <span class="absolute top-0 left-0 w-[60%] h-[1px] bg-white/30"></span>
                    <span class="absolute top-0 left-0 w-[1px] h-full bg-white/30"></span>
                    <span class="absolute bottom-0 left-0 w-[95%] h-[1px] bg-white/30"></span>
                    <span class="absolute bottom-0 right-[5%] w-[1px] h-[35%] bg-white/30"></span>

                    <div class="relative z-10">
                        <h2 class="text-4xl md:text-5xl font-serif text-[#d2ad83] mb-3 tracking-wider uppercase">You
                            Have A Story</h2>
                        <h3 class="text-lg md:text-xl text-white tracking-[0.2em] uppercase font-light mb-10">It's Our
                            Job to Honor It</h3>

                        <div
                            class="space-y-6 text-gray-300 text-sm md:text-[15px] leading-relaxed font-light pr-4 md:pr-10">
                            <p>Michigan Justice is all about values. We value our clients, community, and employees. Our
                                clients value a personal level of care; therefore, we strive for deep, meaningful,
                                people-first relationships with each one. Every unique matter is staffed at the
                                appropriate level of expertise and personnel to maximize the value the client deserves.
                            </p>
                            <p>Michigan Justice has the depth, breadth, and sophistication of a large law firm, but is
                                nimble enough to ensure that all clients receive exceptional service – this means our
                                attorneys are responsive, accessible, and competent. All that matters at the end of the
                                day is that the business needs of the client are being met.</p>
                        </div>

                        <a href="#"
                            class="inline-flex items-center gap-3 mt-12 bg-[#a67c52] hover:bg-[#8a6541] rounded-md transition duration-300 text-white px-8 py-4 text-sm font-semibold tracking-widest uppercase">
                            Book a consultation <span class="text-lg leading-none font-normal">→</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- why choose us section -->
    <section id="why-choose-us" class="py-16 lg:py-20 bg-white overflow-hidden">
        <div class="max-w-[1600px] mx-auto px-6 md:px-10">
            <div class="flex flex-col lg:flex-row gap-16 items-center">

                <div class="w-full lg:w-[40%]">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-10 h-[2px] bg-primary"></span>
                        <span class="text-primary font-bold text-xs uppercase tracking-widest">Why Choose Us</span>
                    </div>
                    <h2 class="text-2xl md:text-4xl font-black text-black leading-tight mb-8">
                        Your Trusted Partner for
                        <span class="text-primary italic">UK Immigration</span> Success
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-10">
                        At Stonebridge Legal Solutions, we combine high-level regulation with a client-first approach to
                        ensure your journey is smooth and successful.
                    </p>
                    <a href="#"
                        class="inline-block bg-primary text-white font-bold px-8 py-3.5 rounded-md hover:bg-black transition-all duration-300 shadow-xl shadow-black/10 text-sm">
                        Start Your Consultation
                    </a>
                </div>

                <div class="w-full lg:w-[60%] grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div
                        class="h-[100px] border-2 border-dotted border-gray-200 p-4 rounded-xl flex flex-col justify-center hover:border-primary hover:bg-gray-50 transition-all duration-300 group">
                        <h4 class="text-sm font-bold text-black mb-1 group-hover:text-primary transition-colors">Expert
                            Regulated Advice</h4>
                        <p class="text-sm text-gray-500 leading-tight line-clamp-2">Regulated at the highest level (IAA
                            Level 3) to handle complex cases and appeals.</p>
                    </div>

                    <div
                        class="h-[100px] border-2 border-dotted border-gray-200 p-4 rounded-xl flex flex-col justify-center hover:border-primary hover:bg-gray-50 transition-all duration-300 group">
                        <h4 class="text-sm font-bold text-black mb-1 group-hover:text-primary transition-colors">High
                            Success Rate</h4>
                        <p class="text-sm text-gray-500 leading-tight line-clamp-2">Built on results. Strong track
                            record of securing visas and winning appeals.</p>
                    </div>

                    <div
                        class="h-[100px] border-2 border-dotted border-gray-200 p-4 rounded-xl flex flex-col justify-center hover:border-primary hover:bg-gray-50 transition-all duration-300 group">
                        <h4 class="text-sm font-bold text-black mb-1 group-hover:text-primary transition-colors">
                            Client-Centric Service</h4>
                        <p class="text-sm text-gray-500 leading-tight line-clamp-2">Clear, honest, and supportive
                            guidance with direct access to your advisor.</p>
                    </div>

                    <div
                        class="h-[100px] border-2 border-dotted border-gray-200 p-4 rounded-xl flex flex-col justify-center hover:border-primary hover:bg-gray-50 transition-all duration-300 group">
                        <h4 class="text-sm font-bold text-black mb-1 group-hover:text-primary transition-colors">
                            Transparent Pricing</h4>
                        <p class="text-sm text-gray-500 leading-tight line-clamp-2">Straightforward pricing with no
                            hidden fees, so you know exactly what to expect.</p>
                    </div>

                    <div
                        class="h-[100px] border-2 border-dotted border-gray-200 p-4 rounded-xl flex flex-col justify-center hover:border-primary hover:bg-gray-50 transition-all duration-300 group">
                        <h4 class="text-sm font-bold text-black mb-1 group-hover:text-primary transition-colors">
                            Full-Service Firm</h4>
                        <p class="text-sm text-gray-500 leading-tight line-clamp-2">From initial application to business
                            compliance, we cover every aspect of UK law.</p>
                    </div>

                    <div
                        class="h-[100px] border-2 border-dotted border-gray-200 p-4 rounded-xl flex flex-col justify-center hover:border-primary hover:bg-gray-50 transition-all duration-300 group">
                        <h4 class="text-sm font-bold text-black mb-1 group-hover:text-primary transition-colors">
                            Business & HR Support</h4>
                        <p class="text-sm text-gray-500 leading-tight line-clamp-2">Dedicated services for businesses,
                            including sponsor licence and HRMS portals.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- process section -->

    <section class="relative py-16 lg:py-20 bg-cover bg-center bg-no-repeat "
        style="background-image: url('img/process.png');">

        <div class="absolute inset-0 bg-[#0a0d13]/80"></div>

        <div class="relative z-10 max-w-[1600px] mx-auto px-6 md:px-10">

            <div class="flex flex-col lg:flex-row justify-between items-end gap-6 mb-12">
                <div class="max-w-2xl">

                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-10 h-[2px] bg-primary"></span>
                        <span class="text-primary font-bold text-xs uppercase tracking-[0.3em]"> Our Legal Process
                        </span>
                    </div>

                    <h2 class="text-2xl lg:text-4xl font-bold leading-tight text-white mb-4">
                        Your Journey <span class="text-primary italic">Toward the</span><br>Right Legal Solution
                    </h2>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-lg">
                        Our structured legal process ensures clarity, confidence, and step-by-step guidance for the best
                        possible outcome.
                    </p>
                </div>

                <div class="hidden lg:block pb-1">
                    <a href="#"
                        class="inline-flex items-center justify-center px-6 py-2.5 rounded-full border border-white/20 bg-white/5 backdrop-blur-md text-white hover:bg-white/10 hover:border-white/40 transition duration-300 font-medium text-sm">
                        Explore More
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

                <div
                    class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:-translate-y-1 transition duration-300 group shadow-lg">
                    <div
                        class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center mb-5 text-gray-300 group-hover:border-primary group-hover:text-primary transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-white text-lg font-bold mb-3">Detailed Case Understanding</h3>
                    <p class="text-gray-400 text-base leading-relaxed mb-5 min-h-[60px]">
                        We begin by listening carefully, reviewing your documents, and identifying the legal paths
                        available.
                    </p>
                    <a href="#"
                        class="text-white text-sm font-medium flex items-center gap-2 group-hover:text-primary transition-colors">
                        Learn more <span class="group-hover:translate-x-1 transition-transform">→</span>
                    </a>
                </div>

                <div
                    class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:-translate-y-1 transition duration-300 group shadow-lg">
                    <div
                        class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center mb-5 text-gray-300 group-hover:border-primary group-hover:text-primary transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                        </svg>
                    </div>
                    <h3 class="text-white text-lg font-bold mb-3">Research & Strategic Planning</h3>
                    <p class="text-gray-400 text-base leading-relaxed mb-5 ">
                        Our team analyzes your case, studies relevant laws, and builds a strong, step-by-step strategy.
                    </p>
                    <a href="#"
                        class="text-white text-sm font-medium flex items-center gap-2 group-hover:text-primary transition-colors">
                        Learn more <span class="group-hover:translate-x-1 transition-transform">→</span>
                    </a>
                </div>

                <div
                    class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:-translate-y-1 transition duration-300 group shadow-lg">
                    <div
                        class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center mb-5 text-gray-300 group-hover:border-primary group-hover:text-primary transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-white text-lg font-bold mb-3">Legal Case Representation</h3>
                    <p class="text-gray-400 text-base leading-relaxed mb-5 min-h-[60px]">
                        We take action on your behalf with confident advocacy, proper documentation, and consistent
                        communication.
                    </p>
                    <a href="#"
                        class="text-white text-sm font-medium flex items-center gap-2 group-hover:text-primary transition-colors">
                        Learn more <span class="group-hover:translate-x-1 transition-transform">→</span>
                    </a>
                </div>

                <div
                    class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:-translate-y-1 transition duration-300 group shadow-lg">
                    <div
                        class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center mb-5 text-gray-300 group-hover:border-primary group-hover:text-primary transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-white text-lg font-bold mb-3">Resolution & Ongoing Support</h3>
                    <p class="text-gray-400 text-base leading-relaxed mb-5 min-h-[60px]">
                        Once the case progresses, we guide you through final steps and ensure you remain protected
                        moving forward.
                    </p>
                    <a href="#"
                        class="text-white text-sm font-medium flex items-center gap-2 group-hover:text-primary transition-colors">
                        Learn more <span class="group-hover:translate-x-1 transition-transform">→</span>
                    </a>
                </div>

            </div>

            <div class="mt-8 lg:hidden text-center">
                <a href="#"
                    class="inline-flex items-center justify-center px-6 py-2.5 rounded-full border border-white/20 bg-white/5 backdrop-blur-md text-white hover:bg-white/10 transition duration-300 font-medium w-full text-sm">
                    Explore More
                </a>
            </div>

        </div>
    </section>


    <!-- gallery section -->
    <section id="gallery" class="py-16 lg:py-20 bg-[#05070a] overflow-hidden">
        <div class="max-w-[1600px] mx-auto px-6 md:px-10">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-8">
                <div class="max-w-2xl">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-10 h-[2px] bg-primary"></span>
                        <span class="text-primary font-bold text-xs uppercase tracking-[0.3em]">Our Portfolio</span>
                    </div>
                    <h2 class="text-2xl md:text-4xl font-black text-white leading-tight">
                        Inside Stonebridge <br> <span class="text-primary italic">Legal</span> Gallery
                    </h2>
                </div>
                <div class="pb-2">



                    <a href="#"
                        class="inline-block bg-primary text-white font-bold px-8 py-3.5 rounded-md hover:bg-black transition-all duration-300 shadow-xl shadow-black/10 text-sm">
                        View All Gallery
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">

                <div class="group relative aspect-[4/3] overflow-hidden rounded-2xl border border-white/5 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&q=80"
                        alt="Legal Team"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-0 group-hover:opacity-90 transition-all duration-500 flex flex-col justify-end p-8">
                        <h4
                            class="text-white text-xl font-bold translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            Expert Consultation</h4>
                        <p
                            class="text-primary text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity delay-200">
                            Stonebridge Head Office</p>
                    </div>
                </div>

                <div class="group relative aspect-[4/3] overflow-hidden rounded-2xl border border-white/5 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?auto=format&fit=crop&q=80"
                        alt="Office Interior"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-0 group-hover:opacity-90 transition-all duration-500 flex flex-col justify-end p-8">
                        <h4
                            class="text-white text-xl font-bold translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            Corporate Strategy</h4>
                        <p
                            class="text-primary text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity delay-200">
                            Legal Planning Room</p>
                    </div>
                </div>

                <div class="group relative aspect-[4/3] overflow-hidden rounded-2xl border border-white/5 shadow-2xl">
                    <img src="IMG/7.jpeg" alt="Meeting"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-0 group-hover:opacity-90 transition-all duration-500 flex flex-col justify-end p-8">
                        <h4
                            class="text-white text-xl font-bold translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            Client Success</h4>
                        <p
                            class="text-primary text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity delay-200">
                            Final Case Resolution</p>
                    </div>
                </div>

                <div class="group relative aspect-[4/3] overflow-hidden rounded-2xl border border-white/5 shadow-2xl">
                    <img src="IMG/9.jpeg" alt="Courthouse"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-0 group-hover:opacity-90 transition-all duration-500 flex flex-col justify-end p-8">
                        <h4
                            class="text-white text-xl font-bold translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            Court Representation</h4>
                        <p
                            class="text-primary text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity delay-200">
                            London Court House</p>
                    </div>
                </div>

                <div class="group relative aspect-[4/3] overflow-hidden rounded-2xl border border-white/5 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&q=80"
                        alt="Library"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-0 group-hover:opacity-90 transition-all duration-500 flex flex-col justify-end p-8">
                        <h4
                            class="text-white text-xl font-bold translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            Legal Library</h4>
                        <p
                            class="text-primary text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity delay-200">
                            Resources & Research</p>
                    </div>
                </div>

                <div class="group relative aspect-[4/3] overflow-hidden rounded-2xl border border-white/5 shadow-2xl">
                    <img src="IMG/10.jpeg" alt="Document"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-0 group-hover:opacity-90 transition-all duration-500 flex flex-col justify-end p-8">
                        <h4
                            class="text-white text-xl font-bold translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            Case Documents</h4>
                        <p
                            class="text-primary text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity delay-200">
                            Precision Filing</p>
                    </div>
                </div>

                <div class="group relative aspect-[4/3] overflow-hidden rounded-2xl border border-white/5 shadow-2xl">
                    <img src="IMG/7.jpeg" alt="Meeting"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-0 group-hover:opacity-90 transition-all duration-500 flex flex-col justify-end p-8">
                        <h4
                            class="text-white text-xl font-bold translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            Client Success</h4>
                        <p
                            class="text-primary text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity delay-200">
                            Final Case Resolution</p>
                    </div>
                </div>

                <div class="group relative aspect-[4/3] overflow-hidden rounded-2xl border border-white/5 shadow-2xl">
                    <img src="IMG/9.jpeg" alt="Courthouse"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-0 group-hover:opacity-90 transition-all duration-500 flex flex-col justify-end p-8">
                        <h4
                            class="text-white text-xl font-bold translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            Court Representation</h4>
                        <p
                            class="text-primary text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity delay-200">
                            London Court House</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- video section -->
    <section id="video-gallery" class="py-16 md:py-24 bg-[#0a0d13] overflow-hidden">
        <div class="max-w-[1600px] mx-auto px-6 md:px-10">

            <div class="max-w-2xl mb-16">
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-10 h-[2px] bg-primary"></span>
                    <span class="text-primary font-bold text-xs uppercase tracking-[0.3em]">Video Resources</span>
                </div>
                <h2 class="text-2xl md:text-4xl font-black text-white leading-tight">
                    Our Legal <span class="text-primary italic">Insights</span> & Guides
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

                <div class="relative group p-[2px] rounded-2xl overflow-hidden bg-white/5 h-full cursor-pointer"
                    onclick="openVideo('https://www.youtube.com/embed/dQw4w9WgXcQ')">

                    <div
                        class="absolute inset-[-1000%] animate-[spin_4s_linear_infinite] group-hover:animate-[spin_2s_linear_infinite] bg-[conic-gradient(from_90deg_at_50%_50%,#b48a3e_0%,#ffffff_50%,#b48a3e_100%)] opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div
                        class="relative bg-[#161b22] rounded-2xl p-2 h-full flex flex-col z-10 transition-all duration-500 group-hover:bg-[#1c2128]">
                        <div class="relative aspect-video rounded-2xl overflow-hidden mb-6">
                            <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&q=80"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div
                                class="absolute inset-0 bg-black/40 flex items-center justify-center group-hover:bg-black/20 transition-all">
                                <div
                                    class="w-14 h-14 bg-primary text-white rounded-full flex items-center justify-center shadow-2xl group-hover:scale-125 transition-all border-2 border-white/20">
                                    <svg class="w-6 h-6 ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-6">
                            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">UK
                                Spouse Visa Guide 2026</h3>
                            <p class="text-gray-400 text-sm line-clamp-2">Everything you need to know about financial
                                requirements and documents.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-16 text-center">
                <a href="#"
                    class="inline-block bg-primary text-white font-bold px-10 py-4 rounded-md hover:bg-white hover:text-black transition-all duration-300 shadow-xl shadow-primary/10 text-sm uppercase tracking-widest">
                    View All Gallery
                </a>
            </div>
        </div>
    </section>






    <!-- blog section -->
    <section id="blog" class="py-16 lg:py-20 bg-gray-50 overflow-hidden">
        <div class="max-w-[1600px] mx-auto px-6 md:px-10">

            <div class="flex flex-col lg:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl">



                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-10 h-[2px] bg-primary"></span>
                        <span class="text-primary font-bold text-xs uppercase tracking-widest"> Latest Insights</span>
                    </div>
                    <h2 class="text-2xl md:text-4xl font-black text-black leading-tight mb-8">
                        Stay updated
                        <span class="text-primary it">with </span> Legal news
                    </h2>
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

                <div
                    class="group cursor-pointer bg-white p-5 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-[240px] rounded-2xl overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&q=80"
                            alt="Blog Image"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4 bg-white px-4 py-2 rounded-lg text-center shadow-lg">
                            <span class="block text-black font-black text-xl leading-none">02</span>
                            <span class="text-gray-500 text-[10px] uppercase font-bold">Mar 2026</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 text-xs font-bold text-primary uppercase tracking-widest">
                            <span>Immigration</span>
                            <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                            <span class="text-gray-400 uppercase">Admin</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-black group-hover:text-primary transition-colors leading-snug line-clamp-2">
                            New UK Skilled Worker Visa Changes: What You Need to Know
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed line-clamp-2">
                            The UK Home Office recently announced significant updates to the minimum salary requirements
                            for Skilled Worker Visas...
                        </p>
                        <a href="#"
                            class="inline-flex bg-primary text-white font-bold px-8 py-3.5 rounded-md hover:bg-black transition-all duration-300 shadow-xl shadow-black/10 text-sm">
                            Read Article <span>→</span>
                        </a>

                    </div>
                </div>

                <div
                    class="group cursor-pointer bg-white p-5 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-[240px] rounded-2xl overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?auto=format&fit=crop&q=80"
                            alt="Blog Image"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4 bg-white px-4 py-2 rounded-lg text-center shadow-lg">
                            <span class="block text-black font-black text-xl leading-none">28</span>
                            <span class="text-gray-500 text-[10px] uppercase font-bold">Feb 2026</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 text-xs font-bold text-primary uppercase tracking-widest">
                            <span>Sponsorship</span>
                            <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                            <span class="text-gray-400 uppercase">Admin</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-black group-hover:text-primary transition-colors leading-snug line-clamp-2">
                            How to Maintain Your Sponsor Licence Compliance in 2026
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed line-clamp-2">
                            Maintaining a Sponsor Licence requires strict adherence to HRMS records and reporting
                            duties. Our guide covers the essentials...
                        </p>
                        <a href="#"
                            class="inline-flex bg-primary text-white font-bold px-8 py-3.5 rounded-md hover:bg-black transition-all duration-300 shadow-xl shadow-black/10 text-sm">
                            Read Article <span>→</span>
                        </a>
                    </div>
                </div>

                <div
                    class="group cursor-pointer bg-white p-5 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-[240px] rounded-2xl overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&q=80"
                            alt="Blog Image"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4 bg-white px-4 py-2 rounded-lg text-center shadow-lg">
                            <span class="block text-black font-black text-xl leading-none">02</span>
                            <span class="text-gray-500 text-[10px] uppercase font-bold">Mar 2026</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 text-xs font-bold text-primary uppercase tracking-widest">
                            <span>Immigration</span>
                            <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                            <span class="text-gray-400 uppercase">Admin</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-black group-hover:text-primary transition-colors leading-snug line-clamp-2">
                            New UK Skilled Worker Visa Changes: What You Need to Know
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed line-clamp-2">
                            The UK Home Office recently announced significant updates to the minimum salary requirements
                            for Skilled Worker Visas...
                        </p>
                        <a href="#"
                            class="inline-flex bg-primary text-white font-bold px-8 py-3.5 rounded-md hover:bg-black transition-all duration-300 shadow-xl shadow-black/10 text-sm">
                            Read Article <span>→</span>
                        </a>

                    </div>
                </div>

                <div
                    class="group cursor-pointer bg-white p-5 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-[240px] rounded-2xl overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?auto=format&fit=crop&q=80"
                            alt="Blog Image"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4 bg-white px-4 py-2 rounded-lg text-center shadow-lg">
                            <span class="block text-black font-black text-xl leading-none">28</span>
                            <span class="text-gray-500 text-[10px] uppercase font-bold">Feb 2026</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 text-xs font-bold text-primary uppercase tracking-widest">
                            <span>Sponsorship</span>
                            <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                            <span class="text-gray-400 uppercase">Admin</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-black group-hover:text-primary transition-colors leading-snug line-clamp-2">
                            How to Maintain Your Sponsor Licence Compliance in 2026
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed line-clamp-2">
                            Maintaining a Sponsor Licence requires strict adherence to HRMS records and reporting
                            duties. Our guide covers the essentials...
                        </p>
                        <a href="#"
                            class="inline-flex bg-primary text-white font-bold px-8 py-3.5 rounded-md hover:bg-black transition-all duration-300 shadow-xl shadow-black/10 text-sm">
                            Read Article <span>→</span>
                        </a>
                    </div>
                </div>



            </div>

            <div class="mt-16 text-center">
                <a href="#"
                    class="inline-block bg-primary text-white font-bold px-8 py-3.5 rounded-md hover:bg-black transition-all duration-300 shadow-xl shadow-black/10 text-sm">
                    View All Blogs
                </a>
            </div>
        </div>
    </section>


    <?php include('footer.php') ?>

    <script src="main.js"></script>

</body>

</html>