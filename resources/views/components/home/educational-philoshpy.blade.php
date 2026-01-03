<style>
    .step-circle {
        width: 48px;
        height: 48px;
        border-radius: 9999px;
        background-color: rgba(15, 46, 74, 0.15);
        /* primary/15 */
        color: #0F2E4A;
        /* primary */
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 12px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .step-title {
        font-weight: 600;
        color: #1f2937;
        /* textMain */
        margin-bottom: 6px;
    }

    .step-desc {
        font-size: 14px;
        color: #6b7280;
    }

    /* ACTIVE STATE */
    .step.active .step-circle {
        background-color: #0F2E4A;
        /* primary */
        color: #ffffff;
        /* light */
        transform: scale(1.1);
    }

    .step.active .step-title {
        color: #0C273F;
        /* primaryDark */
    }
</style>

<!-- EDUCATIONAL PHILOSOPHY – PROGRESS TIMELINE -->
<section id="philosophy" class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Header -->
        <div class="max-w-3xl mb-16">

            <!-- Section Label -->
            <span class="inline-flex items-center gap-2 mb-3
                 text-sm font-semibold uppercase text-accent">
                <i class="fa-solid fa-graduation-cap"></i>
                Our Approach to Learning
            </span>

            <!-- Main Heading -->
            <h2 class="text-3xl sm:text-4xl font-bold text-textMain flex items-center gap-3">

                Educating Minds. Shaping Character.
            </h2>

            <!-- Description -->
            <p class="mt-4 text-gray-600 flex items-start gap-3">

                <span>
                    A structured learning journey that progresses clearly at every stage.
                </span>
            </p>

        </div>


        <!-- Timeline Wrapper -->
        <div class="relative">

            <!-- Track -->
            <div
                class="absolute top-6 left-0 right-0 h-[3px] rounded-full bg-primary/20">
            </div>

            <!-- Progress Fill -->
            <div id="progressBar"
                class="absolute top-6 left-0 h-[3px] rounded-full bg-primary transition-all duration-300"
                style="width:0%">
            </div>

            <!-- Steps -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 relative">

                <!-- STEP 01 -->
                <div class="step text-center" data-step>
                    <div class="step-circle">01</div>
                    <h3 class="step-title">Child-Centric Learning</h3>
                    <p class="step-desc">
                        Teaching adapts to each child’s pace, interests, and strengths.
                    </p>
                </div>

                <!-- STEP 02 -->
                <div class="step text-center" data-step>
                    <div class="step-circle">02</div>
                    <h3 class="step-title">Values & Discipline</h3>
                    <p class="step-desc">
                        Integrity, respect, and responsibility guide everyday learning.
                    </p>
                </div>

                <!-- STEP 03 -->
                <div class="step text-center" data-step>
                    <div class="step-circle">03</div>
                    <h3 class="step-title">Academic Balance</h3>
                    <p class="step-desc">
                        Academics supported by sports, arts, and co-curricular activities.
                    </p>
                </div>

                <!-- STEP 04 -->
                <div class="step text-center" data-step>
                    <div class="step-circle">04</div>
                    <h3 class="step-title">Holistic Development</h3>
                    <p class="step-desc">
                        Intellectual, emotional, and physical growth for life readiness.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('scroll', () => {
        const section = document.getElementById('philosophy');
        const progressBar = document.getElementById('progressBar');
        const steps = document.querySelectorAll('.step');

        const rect = section.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (rect.top < windowHeight && rect.bottom > 0) {
            const progress = Math.min(
                Math.max((windowHeight - rect.top) / (rect.height + windowHeight), 0),
                1
            );

            progressBar.style.width = `${progress * 100}%`;

            const activeIndex = Math.floor(progress * steps.length);
            steps.forEach((step, index) => {
                step.classList.toggle('active', index <= activeIndex);
            });
        }
    });
</script>