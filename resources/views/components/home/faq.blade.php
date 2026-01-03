<!-- FAQ SECTION -->
<section class="bg-gray-50 py-20">
    <div class="max-w-4xl mx-auto px-6">

        <!-- SECTION HEADER -->
        <div class="mb-12 text-left">
            <span class="inline-flex items-center gap-2 mb-3
                         text-sm font-semibold tracking-wide uppercase text-accent">
                <i class="fa-solid fa-circle-question"></i>
                Frequently Asked Questions
            </span>

            <h2 class="text-3xl sm:text-4xl font-bold text-textMain">
                Parents’ Common Queries
            </h2>

            <p class="mt-4 text-gray-600 text-base sm:text-lg">
                Answers to the most common questions about admissions,
                academics, and campus life at New Era High School.
            </p>
        </div>

        <!-- FAQ LIST -->
        <div class="space-y-4">

            <!-- FAQ ITEM -->
            <div class="border border-gray-200 rounded-xl bg-white">
                <button onclick="toggleFAQ(1)"
                    class="w-full flex items-center justify-between
                               px-6 py-5 text-left">
                    <span class="font-semibold text-textMain">
                        Is admission really free for the 2026–27 session?
                    </span>
                    <i id="icon-1"
                        class="fa-solid fa-plus text-primary transition-transform"></i>
                </button>
                <div id="faq-1" class="hidden px-6 pb-5 text-gray-600">
                    Yes, New Era High School is offering <strong>free admissions
                        for selected classes</strong> for the Academic Session 2026–27,
                    as part of our commitment to accessible quality education.
                </div>
            </div>

            <!-- FAQ ITEM -->
            <div class="border border-gray-200 rounded-xl bg-white">
                <button onclick="toggleFAQ(2)"
                    class="w-full flex items-center justify-between
                               px-6 py-5 text-left">
                    <span class="font-semibold text-textMain">
                        Which board and curriculum does the school follow?
                    </span>
                    <i id="icon-2"
                        class="fa-solid fa-plus text-primary transition-transform"></i>
                </button>
                <div id="faq-2" class="hidden px-6 pb-5 text-gray-600">
                    The school follows a structured curriculum aligned with
                    national academic standards, focusing on strong fundamentals,
                    conceptual clarity, and value-based learning.
                </div>
            </div>

            <!-- FAQ ITEM -->
            <div class="border border-gray-200 rounded-xl bg-white">
                <button onclick="toggleFAQ(3)"
                    class="w-full flex items-center justify-between
                               px-6 py-5 text-left">
                    <span class="font-semibold text-textMain">
                        What safety measures are in place on campus?
                    </span>
                    <i id="icon-3"
                        class="fa-solid fa-plus text-primary transition-transform"></i>
                </button>
                <div id="faq-3" class="hidden px-6 pb-5 text-gray-600">
                    Our campus is equipped with CCTV surveillance,
                    secure entry systems, trained staff, and strict
                    safety protocols to ensure a safe learning environment.
                </div>
            </div>

            <!-- FAQ ITEM -->
            <div class="border border-gray-200 rounded-xl bg-white">
                <button onclick="toggleFAQ(4)"
                    class="w-full flex items-center justify-between
                               px-6 py-5 text-left">
                    <span class="font-semibold text-textMain">
                        Does the school provide transportation facilities?
                    </span>
                    <i id="icon-4"
                        class="fa-solid fa-plus text-primary transition-transform"></i>
                </button>
                <div id="faq-4" class="hidden px-6 pb-5 text-gray-600">
                    Yes, we offer well-managed transportation facilities
                    covering key routes, ensuring safe and comfortable
                    travel for students.
                </div>
            </div>

            <!-- FAQ ITEM -->
            <div class="border border-gray-200 rounded-xl bg-white">
                <button onclick="toggleFAQ(5)"
                    class="w-full flex items-center justify-between
                               px-6 py-5 text-left">
                    <span class="font-semibold text-textMain">
                        How can parents apply for admission?
                    </span>
                    <i id="icon-5"
                        class="fa-solid fa-plus text-primary transition-transform"></i>
                </button>
                <div id="faq-5" class="hidden px-6 pb-5 text-gray-600">
                    Parents can apply online through the Admission page
                    or visit the school campus for assistance with the
                    admission process.
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    function toggleFAQ(id) {
        const content = document.getElementById(`faq-${id}`);
        const icon = document.getElementById(`icon-${id}`);

        content.classList.toggle("hidden");
        icon.classList.toggle("fa-plus");
        icon.classList.toggle("fa-minus");
    }
</script>