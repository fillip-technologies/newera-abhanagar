<style>
    .reveal {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s ease;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- CARD 1 -->
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden reveal hover:shadow-lg transition">

                <img src="/images/sports.jpg"
                    alt="Sports & Athletics"
                    class="w-full h-56 object-cover">

                <div class="p-6">
                    <div class="flex items-center gap-2 text-[#B80212] mb-3">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <h3 class="text-xl font-semibold mb-3" style="color:#0F2E4A;">
                        Sports & Athletics
                    </h3>

                    <p class="text-gray-600 text-sm leading-relaxed">
                        Our high school encourages physical fitness and teamwork through various sports activities,
                        fostering a spirit of healthy competition, Physical fitness and sportsmanship.
                    </p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden reveal hover:shadow-lg transition">

                <img src="/images/science.jpg"
                    alt="Science & Art Exhibition"
                    class="w-full h-56 object-cover">

                <div class="p-6">
                    <div class="flex items-center gap-2 text-[#B80212] mb-3">★★★★★</div>

                    <h3 class="text-xl font-semibold mb-3" style="color:#0F2E4A;">
                        Science & Art Exhibition
                    </h3>

                    <p class="text-gray-600 text-sm leading-relaxed">
                        New Era High School serves as platforms for students to showcase their inventive prowess,
                        fostering creativity, and innovation. These events celebrate the intersection of science and art.
                    </p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden reveal hover:shadow-lg transition">

                <img src="/images/arts.jpg"
                    alt="Arts & Culture"
                    class="w-full h-56 object-cover">

                <div class="p-6">
                    <div class="text-[#B80212] mb-3">★★★★★</div>

                    <h3 class="text-xl font-semibold mb-3" style="color:#0F2E4A;">
                        Arts & Culture
                    </h3>

                    <p class="text-gray-600 text-sm leading-relaxed">
                        Students showcase their creativity in cultural festivals, art exhibitions,
                        and musical performances, celebrating the rich diversity of talents within the school community.
                    </p>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden reveal hover:shadow-lg transition">

                <img src="/images/leadership.jpg"
                    alt="Leadership & Student Government"
                    class="w-full h-56 object-cover">

                <div class="p-6">
                    <div class="text-[#B80212] mb-3">★★★★★</div>

                    <h3 class="text-xl font-semibold mb-3" style="color:#0F2E4A;">
                        Leadership & Student Government
                    </h3>

                    <p class="text-gray-600 text-sm leading-relaxed">
                        Engage in student government activities to develop leadership skills,
                        voice concerns, and contribute to decision-making processes,
                        fostering a sense of responsibility and civic participation.
                    </p>
                </div>
            </div>

            <!-- CARD 5 -->
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden reveal hover:shadow-lg transition">

                <img src="/images/social.jpg"
                    alt="Social Service Initiatives"
                    class="w-full h-56 object-cover">

                <div class="p-6">
                    <div class="text-[#B80212] mb-3">★★★★★</div>

                    <h3 class="text-xl font-semibold mb-3" style="color:#0F2E4A;">
                        Social Service Initiatives
                    </h3>

                    <p class="text-gray-600 text-sm leading-relaxed">
                        New Era High School emphasizes the importance of giving back.
                        Students actively participate in community service projects,
                        promoting a sense of empathy and social responsibility.
                    </p>
                </div>
            </div>

            <!-- CARD 6 -->
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden reveal hover:shadow-lg transition">

                <img src="/images/academic.jpg"
                    alt="Academic Competitions"
                    class="w-full h-56 object-cover">

                <div class="p-6">
                    <div class="text-[#B80212] mb-3">★★★★★</div>

                    <h3 class="text-xl font-semibold mb-3" style="color:#0F2E4A;">
                        Academic Competitions
                    </h3>

                    <p class="text-gray-600 text-sm leading-relaxed">
                        Encourage intellectual growth and healthy competition through participation
                        in academic contests, quizzes, and science fairs,
                        allowing students to showcase their academic prowess and passion for learning.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
    const reveals = document.querySelectorAll('.reveal');
    const revealOnScroll = () => {
        const h = window.innerHeight;
        reveals.forEach(el => {
            if (el.getBoundingClientRect().top < h - 100) {
                el.classList.add('active');
            }
        });
    };
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();
</script>