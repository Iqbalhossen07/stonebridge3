
 
    const openBtn = document.getElementById('openMenu');
    const closeBtn = document.getElementById('closeMenu');
    const menuOverlay = document.getElementById('mobileMenuOverlay');

    openBtn.addEventListener('click', () => {
        menuOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    closeBtn.addEventListener('click', () => {
        menuOverlay.classList.remove('active');
        document.body.style.overflow = 'auto';
    });


    // Sticky Header Logic
    const header = document.getElementById('mainHeader');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('bg-darkbg/90', 'backdrop-blur-md', 'py-3', 'shadow-2xl', 'border-b',
                'border-white/5');
            header.querySelector('.max-w-\\[1600px\\]').classList.remove('py-5', 'md:py-6');
            header.querySelector('.max-w-\\[1600px\\]').classList.add('py-3');
        } else {
            header.classList.remove('bg-darkbg/90', 'backdrop-blur-md', 'py-3', 'shadow-2xl', 'border-b',
                'border-white/5');
            header.querySelector('.max-w-\\[1600px\\]').classList.add('py-5', 'md:py-6');
            header.querySelector('.max-w-\\[1600px\\]').classList.remove('py-3');
        }
    });

    // Mobile Menu Logic
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const mobileMenu = document.getElementById('mobileMenuOverlay');

    openMenu.addEventListener('click', () => {
        mobileMenu.classList.remove('translate-x-full');
        document.body.style.overflow = 'hidden'; // স্ক্রল বন্ধ
    });

    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.add('translate-x-full');
        document.body.style.overflow = 'auto'; // স্ক্রল চালু
    });

// hero sli
      let currentSlide = 0;
      const slides = document.querySelectorAll(".hero-slide");

      function nextSlide() {
        slides[currentSlide].style.opacity = "0";
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].style.opacity = "1";
      }

      // প্রতি ৫ সেকেন্ড পর পর স্লাইড চেঞ্জ হবে
      setInterval(nextSlide, 5000);

    function checkTextClamping() {
        const testimonials = document.querySelectorAll('.testimonial-text');
        testimonials.forEach(p => {
            const button = p.nextElementSibling;
            // ScrollHeight > ClientHeight মানে ৩ লাইনের বেশি টেক্সট আছে
            if (p.scrollHeight > p.clientHeight) {
                button.classList.remove('hidden');
            } else {
                button.classList.add('hidden');
            }
        });
    }

    function openModal(btn) {
        const text = btn.previousElementSibling.innerText;
        const userInfo = btn.nextElementSibling.querySelector('.user-info').innerHTML;
        const userInitial = btn.nextElementSibling.querySelector('.w-12').innerText;

        const modal = document.getElementById('testimonialModal');
        const modalContent = document.getElementById('modalContent');
        const modalUser = document.getElementById('modalUser');

        modalContent.innerText = text;
        modalUser.innerHTML = `
            <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold">${userInitial}</div>
            <div>${userInfo}</div>
        `;

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden'; // স্ক্রল বন্ধ
    }

    function closeModal() {
        const modal = document.getElementById('testimonialModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto'; // স্ক্রল চালু
    }

    // লোড এবং রিসাইজ এর সময় চেক করবে
    window.addEventListener('load', checkTextClamping);
    window.addEventListener('resize', checkTextClamping);


    function openVideo(url) {
        const modal = document.getElementById('video-modal');
        const iframe = document.getElementById('video-iframe');
        iframe.src = url + "?autoplay=1";
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeVideo() {
        const modal = document.getElementById('video-modal');
        const iframe = document.getElementById('video-iframe');
        iframe.src = "";
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }
   