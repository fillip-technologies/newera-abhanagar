<style>
    /* Base hidden state */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    /* Visible state */
    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    /* Delay utilities */
    .delay-100 {
        transition-delay: 0.1s;
    }

    .delay-200 {
        transition-delay: 0.2s;
    }

    .delay-300 {
        transition-delay: 0.3s;
    }

    .delay-400 {
        transition-delay: 0.4s;
    }

    .delay-500 {
        transition-delay: 0.5s;
    }
</style>

<!-- WHY CHOOSE US – INSTITUTIONAL STYLE -->
<section class="bg-white py-24">

    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-12 gap-14 items-start">

        <!-- LEFT : INTRO CONTENT -->
        <div class="lg:col-span-5 reveal">

            <span class="inline-flex items-center gap-2 mb-4
                         text-sm font-semibold tracking-wide uppercase text-accent">
                <i class="fa-solid fa-compass"></i>
                Why Choose Us
            </span>

            <h2 class="text-3xl sm:text-4xl font-bold text-textMain leading-tight mb-6">
                Education Rooted in Values,<br class="hidden sm:block">
                Prepared for the Future
            </h2>

            <p class="text-gray-600 leading-relaxed mb-5">
                At New Era High School, education is not limited to classrooms.
                We are a close-knit academic community committed to nurturing
                responsible individuals through discipline, knowledge, and care.
            </p>

            <p class="text-gray-600 leading-relaxed">
                Our approach combines strong academics, character formation,
                and real-world readiness, ensuring that every child grows
                with confidence, integrity, and purpose.
            </p>

        </div>

        <!-- RIGHT : KEY PILLARS -->
        <div class="lg:col-span-7 space-y-10">

            <!-- PILLAR 1 -->
            <div class="flex gap-5 reveal delay-100">
                <div class="text-primary text-2xl mt-1">
                    <i class="fa-solid fa-award"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-textMain mb-1">
                        Academic Excellence & CBSE Framework
                    </h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        A rigorous CBSE-aligned curriculum delivered by experienced
                        educators, focused on conceptual clarity and discipline.
                    </p>
                </div>
            </div>

            <!-- PILLAR 2 -->
            <div class="flex gap-5 reveal delay-200">
                <div class="text-primary text-2xl mt-1">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-textMain mb-1">
                        Global Outlook with Cultural Values
                    </h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Encouraging adaptability, inclusivity, and cultural
                        understanding in a connected world.
                    </p>
                </div>
            </div>

            <!-- PILLAR 3 -->
            <div class="flex gap-5 reveal delay-300">
                <div class="text-primary text-2xl mt-1">
                    <i class="fa-solid fa-school"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-textMain mb-1">
                        Safe, Modern & Student-Centric Campus
                    </h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        A secure, well-equipped campus that supports focused
                        learning and student well-being.
                    </p>
                </div>
            </div>

            <!-- PILLAR 4 -->
            <div class="flex gap-5 reveal delay-400">
                <div class="text-primary text-2xl mt-1">
                    <i class="fa-solid fa-user-graduate"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-textMain mb-1">
                        Mentorship & Personal Guidance
                    </h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Teachers work closely with parents to guide students
                        academically, socially, and emotionally.
                    </p>
                </div>
            </div>

            <!-- PILLAR 5 -->
            <div class="flex gap-5 reveal delay-500">
                <div class="text-primary text-2xl mt-1">
                    <i class="fa-solid fa-seedling"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-textMain mb-1">
                        Holistic Development Beyond Academics
                    </h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Balanced focus on values, leadership, activities,
                        and character building.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const reveals = document.querySelectorAll(".reveal");

        const observer = new IntersectionObserver(
            entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                    }
                });
            }, {
                threshold: 0.15
            }
        );

        reveals.forEach(el => observer.observe(el));
    });
</script>