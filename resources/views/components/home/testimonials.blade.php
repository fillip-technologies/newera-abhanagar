<!-- TESTIMONIALS CAROUSEL -->
<section class="bg-white py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- HEADER -->
        <div class="max-w-3xl mb-14">
            <span class="inline-block mb-3 text-sm font-semibold tracking-wide uppercase text-accent">
                Testimonials
            </span>

            <h2 class="text-3xl sm:text-4xl font-bold text-textMain leading-tight">
                What Parents Say About Us
            </h2>

            <p class="mt-4 text-base sm:text-lg text-gray-600 leading-relaxed">
                Genuine feedback from parents who trust New Era High School
                for their child’s education and development.
            </p>
        </div>

        <!-- SWIPER -->
        <div class="swiper testimonialSwiper">
            <div class="swiper-wrapper">

                <!-- TESTIMONIAL 1 -->
                <div class="swiper-slide">
                    <div class="border border-gray-200 rounded-xl p-6 bg-gray-50 h-full">
                        <p class="text-gray-700 text-[16px] leading-relaxed mb-6">
                            “New Era High School has provided my child with a safe and
                            nurturing environment. The teachers are supportive and
                            focus on both academics and values.”
                        </p>

                        <div class="border-t pt-4">
                            <p class="font-semibold text-textMain">
                                Mrs. Sunita Verma
                            </p>
                            <p class="text-sm text-gray-500">
                                Parent of Class VI Student
                            </p>
                        </div>
                    </div>
                </div>

                <!-- TESTIMONIAL 2 -->
                <div class="swiper-slide">
                    <div class="border border-gray-200 rounded-xl p-6 bg-gray-50 h-full">
                        <p class="text-gray-700 text-[16px] leading-relaxed mb-6">
                            “The school’s discipline, teaching quality, and personal
                            attention have helped my son grow confidently. We are
                            extremely satisfied.”
                        </p>

                        <div class="border-t pt-4">
                            <p class="font-semibold text-textMain">
                                Mr. Rakesh Kumar
                            </p>
                            <p class="text-sm text-gray-500">
                                Parent of Class IX Student
                            </p>
                        </div>
                    </div>
                </div>

                <!-- TESTIMONIAL 3 -->
                <div class="swiper-slide">
                    <div class="border border-gray-200 rounded-xl p-6 bg-gray-50 h-full">
                        <p class="text-gray-700 text-[16px] leading-relaxed mb-6">
                            “The balance between academics and extracurricular
                            activities is excellent. My daughter enjoys learning
                            and feels confident.”
                        </p>

                        <div class="border-t pt-4">
                            <p class="font-semibold text-textMain">
                                Mrs. Anjali Singh
                            </p>
                            <p class="text-sm text-gray-500">
                                Parent of Class IV Student
                            </p>
                        </div>
                    </div>
                </div>

                <!-- TESTIMONIAL 4 -->
                <div class="swiper-slide">
                    <div class="border border-gray-200 rounded-xl p-6 bg-gray-50 h-full">
                        <p class="text-gray-700 text-[16px] leading-relaxed mb-6">
                            “The school environment is disciplined and positive.
                            Teachers give individual attention to students.”
                        </p>

                        <div class="border-t pt-4">
                            <p class="font-semibold text-textMain">
                                Mr. Amit Sharma
                            </p>
                            <p class="text-sm text-gray-500">
                                Parent of Class VII Student
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination Dots -->
            <div class="swiper-pagination mt-8"></div>
        </div>

    </div>
</section>

<script>
    new Swiper(".testimonialSwiper", {
        loop: true,
        spaceBetween: 24,
        speed: 700,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        }
    });
</script>