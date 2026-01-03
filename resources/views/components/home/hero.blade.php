<style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0) rotate(0deg);
        }

        50% {
            transform: translateY(-20px) rotate(5deg);
        }
    }

    @keyframes floatSlow {

        0%,
        100% {
            transform: translateY(0) rotate(0deg);
        }

        50% {
            transform: translateY(-30px) rotate(-3deg);
        }
    }

    @keyframes floatFast {

        0%,
        100% {
            transform: translateY(0) scale(1);
        }

        50% {
            transform: translateY(-15px) scale(1.05);
        }
    }

    @keyframes shimmer {
        0% {
            background-position: -200% center;
        }

        100% {
            background-position: 200% center;
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .animate-float-slow {
        animation: floatSlow 8s ease-in-out infinite;
    }

    .animate-float-fast {
        animation: floatFast 4s ease-in-out infinite;
    }

    .animate-shimmer {
        background: linear-gradient(90deg,
                transparent 0%,
                rgba(255, 255, 255, 0.2) 50%,
                transparent 100%);
        background-size: 200% 100%;
        animation: shimmer 3s ease-in-out infinite;
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
    }

    .animation-delay-200 {
        animation-delay: 200ms;
    }

    .animation-delay-400 {
        animation-delay: 400ms;
    }

    .animation-delay-600 {
        animation-delay: 600ms;
    }
</style>

<!-- HERO SECTION -->
<section class="relative bg-gradient-to-br from-white via-gray-50 to-primary/5 overflow-hidden">

    <!-- ABSTRACT BACKGROUND SHAPES -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <!-- Large background circles -->
        <div class="absolute -top-40 -right-40 w-96 h-96 rounded-full bg-primary/5 blur-3xl animate-fade-in"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 rounded-full bg-accent/5 blur-3xl animate-fade-in animation-delay-200"></div>

        <!-- Floating decorative elements -->
        <div class="absolute top-1/4 left-10 w-32 h-32 rounded-3xl border-2 border-primary/20 rotate-12 animate-float-slow"></div>
        <div class="absolute top-1/3 right-20 w-16 h-16 rounded-full bg-accent/10 animate-float"></div>
        <div class="absolute bottom-1/4 left-1/4 w-24 h-24 rounded-xl bg-primary/10 -rotate-12 animate-float-fast"></div>
        <div class="absolute bottom-1/3 right-1/4 w-8 h-8 rounded-full bg-accent/20 animate-float-slow"></div>



        <!-- Grid pattern overlay -->
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 1px 1px, currentColor 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>

    <!-- GRADIENT OVERLAY -->
    <div class="absolute inset-0 z-[1] pointer-events-none bg-gradient-to-t from-white via-transparent to-transparent"></div>

    <!-- MAIN CONTENT -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24 lg:py-32">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div class="text-center lg:text-left space-y-6 lg:space-y-8">
                <!-- Badge with shimmer effect -->
                <div class="inline-flex items-center gap-2 animate-fade-in-up">
                    <div class="relative overflow-hidden rounded-full bg-gradient-to-r from-primary/10 to-accent/10 px-4 py-2">
                        <div class="absolute inset-0 animate-shimmer"></div>
                        <span class="relative text-sm font-semibold text-primary flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                            Est. 1990 • New Era Welfare Development Industries
                        </span>
                    </div>
                </div>

                <!-- Main Heading -->
                <!-- Main Heading -->
                <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight animate-fade-in-up animation-delay-200">
                    <span class="relative bg-clip-text text-transparent
          bg-gradient-to-r from-primary via-primaryDark to-accent">
                        Your Destination for Academic Excellence
                        Starts Here
                        <span class="absolute -bottom-2 left-0 w-full h-1
              bg-gradient-to-r from-primary to-accent rounded-full"></span>
                    </span>
                </h1>


                <!-- Description -->
                <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto lg:mx-0 leading-relaxed animate-fade-in-up animation-delay-400">
                    Where academic excellence meets character development. We nurture curious minds with innovative teaching, strong values, and a commitment to lifelong learning.
                </p>


                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4 animate-fade-in-up animation-delay-800">
                    <a href="#admission"
                        class="group relative px-8 py-4 rounded-xl bg-gradient-to-r from-primary to-primaryDark text-white font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-accent to-accent/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <span class="relative flex items-center justify-center gap-2">
                            Apply for Admission
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </span>
                    </a>

                    <a href="#virtual-tour"
                        class="group px-8 py-4 rounded-xl border-2 border-primary/30 text-primary font-semibold text-sm hover:bg-primary/5 transition-all duration-300 hover:-translate-y-1 hover:border-primary/50">
                        <span class="flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            Virtual Campus Tour
                        </span>
                    </a>
                </div>
            </div>

            <!-- RIGHT slider CARD -->
            <div class="relative animate-fade-in-up animation-delay-400">

                <!-- SLIDER WRAPPER -->
                <div class="relative overflow-hidden rounded-3xl shadow-2xl border-4 border-white">

                    <!-- SLIDES -->
                    <div id="schoolSlider"
                        class="flex transition-transform duration-700 ease-in-out">

                        <!-- Slide 1 -->
                        <div class="min-w-full relative group">
                            <img src="{{ asset('images/Slier2.jpeg') }}"
                                alt="Classroom"
                                class="w-full h-[300px] sm:h-[380px] lg:h-[480px]
                           object-cover object-center">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent"></div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="min-w-full relative group">
                            <img src="{{ asset('images/scilab.jpg') }}"
                                alt="Science Lab"
                                class="w-full h-[300px] sm:h-[380px] lg:h-[480px]
                           object-cover object-center">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent"></div>
                        </div>

                        <!-- Slide 2 -->


                        <!-- Slide 3 -->

                    </div>

                    <!-- FLOATING BADGE (STATIC – SAME AS BEFORE) -->
                    <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-sm rounded-xl
                    shadow-lg px-4 py-2 animate-float-slow z-10">
                        <span class="text-sm font-bold text-primary">#1 Ranked</span>
                    </div>
                </div>

                <!-- Decorative Blur -->
                <div class="absolute -bottom-6 -right-6 w-32 h-32 rounded-full
                bg-gradient-to-br from-primary/20 to-accent/20 blur-xl"></div>

                <!-- Bottom Indicator -->
                <!-- <div class="flex justify-center mt-12 lg:mt-16">
                    <div class="flex items-center gap-2 text-gray-400 animate-bounce">
                        <span class="text-sm">Scroll to explore</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </div>
                </div> -->
            </div>

        </div>
    </div>

    <!-- WAVE SEPARATOR -->
    <div class="absolute bottom-0 left-0 right-0 z-0">
        <svg class="w-full h-16 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="currentColor"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35,6.36,119.13-6.29,32-10.69,60.71-28.27,91.41-44.27C1054.43,38,1127,9,1200,11.22V0Z" opacity=".5" fill="currentColor"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="currentColor"></path>
        </svg>
    </div>
</section>

<script>
    let currentSlide = 0;
    const slider = document.getElementById('schoolSlider');
    const totalSlides = slider.children.length;

    setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    }, 4000);
</script>