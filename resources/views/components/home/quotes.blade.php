<!-- GOOGLE FONT : CURSIVE -->
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

<style>
    @keyframes rotateSlow {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /* Calm & graceful rotation */
    .rotate-slow {
        animation: rotateSlow 40s linear infinite;
    }

    .rotate-slow-reverse {
        animation: rotateSlow 40s linear infinite reverse;
    }
</style>

<!-- SCHOOL PRAYER / INVOCATION SECTION -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between gap-6">

            <!-- LEFT FLOWER -->
            <div class="hidden md:block flex-shrink-0">
                <img src="{{ asset('images/flower1.png') }}"
                    alt="Decorative flower"
                    class="w-30 lg:w-36 rotate-slow opacity-90">
            </div>

            <!-- CENTER TEXT -->
            <div class="max-w-4xl mx-auto text-center">
                <p class="text-[22px] sm:text-[26px] lg:text-[30px] leading-relaxed text-gray-800"
                    style="font-family: 'Great Vibes', cursive;">
                    <span class="block mb-3 text-[32px]">O God!</span>

                    Educate these children. These children are the plants of Thine orchard,
                    the flowers of Thy meadow, the roses of Thy garden.
                    Let Thy rain fall upon them; let the Sun of Reality shine upon them
                    with Thy love. Let Thy breeze refresh them in order that they may be
                    trained, grow and develop, and appear in the utmost beauty.Thou art the Giver. Thou art the Compassionate.
                </p>
            </div>

            <!-- RIGHT FLOWER -->
            <div class="hidden md:block flex-shrink-0">
                <img src="{{ asset('images/flower2.png') }}"
                    alt="Decorative flower"
                    class="w-30 lg:w-36 rotate-slow-reverse opacity-90">
            </div>

        </div>
    </div>
</section>