<!-- VIRTUAL TOUR SECTION -->
<section id="virtual-tour" class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center mb-12">
            <span class="inline-flex items-center gap-2 mb-3
             text-sm font-semibold tracking-wide text-accent uppercase">
                <i class="fa-solid fa-building-columns"></i>
                Campus Experience
            </span>


            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 leading-tight">
                Virtual Tour of NEHS Abha Nagar
            </h2>

            <p class="mt-4 text-base sm:text-lg text-gray-600">
                Take a guided virtual walk through our classrooms, laboratories,
                activity areas, and learning spaces that shape young minds every day.
            </p>
        </div>

        <!-- Video Wrapper -->
        <div class="relative max-w-5xl mx-auto">

            <!-- Video Card -->
            <div class="relative rounded-xl overflow-hidden shadow-xl border border-gray-200 bg-black">

                <!-- LOCAL VIDEO -->
                <!-- LOCAL VIDEO -->
                <video
                    class="w-full h-[220px] sm:h-[360px] lg:h-[480px] object-cover"
                    autoplay
                    muted
                    loop
                    playsinline
                    preload="metadata"
                    poster="{{ asset('images/videos/video-poster.jpg') }}">

                    <source src="{{ asset('images/videos/video-tour.MP4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>


            </div>

            <!-- Caption -->
            <p class="mt-4 text-sm text-gray-500 text-center">
                Explore our campus, facilities, and student-friendly learning environment.
            </p>
        </div>

    </div>
</section>