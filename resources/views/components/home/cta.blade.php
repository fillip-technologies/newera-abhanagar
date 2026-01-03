<!-- ADMISSION CTA SECTION -->
<section class="relative w-full overflow-hidden
               bg-gradient-to-r from-primary via-primaryDark to-primary py-20">

    <!-- Decorative Shapes -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/30 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-white/10 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

        <!-- LEFT CONTENT -->
        <div class="text-white">

            <!-- UPDATED HEADING -->
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight mb-6">
                Free Admissions Open For
                Academic Session 2026–27
            </h2>

            <!-- UPDATED DESCRIPTION -->
            <p class="text-lg text-white/90 max-w-xl mb-6">
                New Era High School, Abha Nagar, Patna is proud to announce
                <strong>FREE ADMISSIONS</strong> for the Academic Session 2026–27.
                Our mission is to make quality education accessible to every child
                in a safe, disciplined, and value-driven environment.
            </p>



            <!-- UPDATED CTA -->
            <a href="/admission"
                class="inline-flex items-center gap-3 px-8 py-4 rounded-full
                      bg-accent text-white font-semibold text-sm
                      hover:bg-white hover:text-primary transition-all">
                Apply for Free Admission
            </a>

        </div>

        <!-- RIGHT TIMER CARD -->
        <div class="flex justify-center lg:justify-end">
            <div class="bg-white rounded-3xl shadow-2xl p-10 w-full max-w-md">

                <h3 class="text-center text-xl font-semibold text-textMain mb-2">
                    Admission Window
                </h3>
                <p class="text-center text-sm text-gray-600 mb-6">
                    Free admissions for a limited period
                </p>

                <!-- TIMER -->
                <div id="countdown" class="grid grid-cols-2 gap-4 text-center">

                    <div class="bg-gray-100 rounded-xl py-5">
                        <span id="days" class="block text-3xl font-bold text-primary">00</span>
                        <span class="text-sm text-gray-600">Days</span>
                    </div>

                    <div class="bg-gray-100 rounded-xl py-5">
                        <span id="hours" class="block text-3xl font-bold text-primary">00</span>
                        <span class="text-sm text-gray-600">Hours</span>
                    </div>

                    <div class="bg-gray-100 rounded-xl py-5">
                        <span id="minutes" class="block text-3xl font-bold text-primary">00</span>
                        <span class="text-sm text-gray-600">Minutes</span>
                    </div>

                    <div class="bg-gray-100 rounded-xl py-5">
                        <span id="seconds" class="block text-3xl font-bold text-primary">00</span>
                        <span class="text-sm text-gray-600">Seconds</span>
                    </div>

                </div>

                <!-- OPTIONAL NOTE -->
                <p class="mt-6 text-center text-xs text-gray-500">
                    * Free admission applicable to selected classes only.
                </p>

            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        // 🔥 SET FUTURE DEADLINE
        const admissionDeadline = new Date("2026-03-31T23:59:59").getTime();

        const daysEl = document.getElementById("days");
        const hoursEl = document.getElementById("hours");
        const minutesEl = document.getElementById("minutes");
        const secondsEl = document.getElementById("seconds");

        if (!daysEl || !hoursEl || !minutesEl || !secondsEl) {
            console.error("Countdown elements not found");
            return;
        }

        const timer = setInterval(() => {
            const now = new Date().getTime();
            const distance = admissionDeadline - now;

            if (distance <= 0) {
                clearInterval(timer);
                daysEl.innerText = "00";
                hoursEl.innerText = "00";
                minutesEl.innerText = "00";
                secondsEl.innerText = "00";
                return;
            }

            daysEl.innerText = Math.floor(distance / (1000 * 60 * 60 * 24));
            hoursEl.innerText = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            minutesEl.innerText = Math.floor(
                (distance % (1000 * 60 * 60)) / (1000 * 60)
            );
            secondsEl.innerText = Math.floor(
                (distance % (1000 * 60)) / 1000
            );

        }, 1000);
    });
</script>