<!-- EXPERIENCE OUR EXCELLENCE -->
<section class="w-full py-20 bg-white overflow-hidden">

    <!-- HEADER (FIXED CONTAINER) -->
    <div class="max-w-7xl mx-auto px-6 mb-14 text-left">
        <span class="inline-flex items-center gap-2 mb-3
                 text-sm font-semibold tracking-wide uppercase text-accent">
            <i class="fa-solid fa-shield-heart"></i>
            A Safe, Inspiring & Student-Centric Campus
        </span>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold
               text-textMain leading-tight">
            Campus & Facilities
        </h2>

        <p class="mt-5 text-base sm:text-lg text-gray-600
              leading-relaxed max-w-3xl">
            Our campus is thoughtfully designed to support academic excellence,
            creativity, and overall well-being in a secure and nurturing environment.
        </p>
    </div>


    <!-- SWIPER -->
    <div class="swiper excellenceSwiper w-full px-4 sm:px-10">

        <div class="swiper-wrapper">

            <!-- CARD 1 -->
            <div class="swiper-slide">
                <div class="relative h-[420px] rounded overflow-hidden shadow-lg">
                    <img src="{{ asset('images/campus.jpg') }}"
                        class="absolute inset-0 w-full h-full object-cover" />

                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-black/10"></div>

                    <div class="relative z-10 p-6 text-white">
                        <h3 class="text-xl font-semibold">Our Campus</h3>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="swiper-slide">
                <div class="relative h-[420px] rounded overflow-hidden shadow-lg">
                    <img src="{{ asset('images/transp.jpg') }}"
                        class="absolute inset-0 w-full h-full object-cover" />

                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-black/10"></div>

                    <div class="relative z-10 p-6 text-white">
                        <h3 class="text-xl font-semibold">Transportation</h3>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="swiper-slide">
                <div class="relative h-[420px] rounded overflow-hidden shadow-lg">
                    <img src="{{ asset('images/scilab.jpg') }}"
                        class="absolute inset-0 w-full h-full object-cover" />

                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-black/10"></div>

                    <div class="relative z-10 p-6 text-white">
                        <h3 class="text-xl font-semibold">Laboratory</h3>
                    </div>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="swiper-slide">
                <div class="relative h-[420px] rounded overflow-hidden shadow-lg">
                    <img src="{{ asset('images/library2.png') }}"
                        class="absolute inset-0 w-full h-full object-cover" />

                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-black/10"></div>

                    <div class="relative z-10 p-6 text-white">
                        <h3 class="text-xl font-semibold">School Library</h3>
                    </div>
                </div>
            </div>

            <!-- CARD 5 -->
            <div class="swiper-slide">
                <div class="relative h-[420px] rounded overflow-hidden shadow-lg">
                    <img src="{{ asset('images/complab.jpg') }}"
                        class="absolute inset-0 w-full h-full object-cover" />

                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-black/10"></div>

                    <div class="relative z-10 p-6 text-white">
                        <h3 class="text-xl font-semibold">Computer Lab</h3>
                    </div>
                </div>
            </div>

        </div>

        <!-- ARROWS (FIXED) -->


    </div>
</section>
<script>
    new Swiper(".excellenceSwiper", {
        loop: true,
        spaceBetween: 24,
        speed: 800,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.1,
            },
            640: {
                slidesPerView: 2.2,
            },
            1024: {
                slidesPerView: 4,
            }
        }
    });
</script>