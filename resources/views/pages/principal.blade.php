@section('content')

<x-hero-banner
    data-title="Principal's Message"
    data-description="Providing visionary leadership to nurture young minds with strong values, discipline, and academic excellence."
    data-image="/images/Slier2.jpeg"
    data-breadcrumb="Principal's Message" />



<!-- MESSAGE FROM THE PRINCIPAL -->
<!-- MESSAGE FROM THE PRINCIPAL -->
<section class="bg-white py-24 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-12 gap-16 items-center">

        <!-- LEFT : PRINCIPAL IMAGE -->
        <div class="lg:col-span-4 reveal">

            <div class="relative max-w-sm mx-auto">

                <!-- Soft background accent -->
                <div class="absolute -top-6 -left-6 w-40 h-40
                            bg-accent/10 rounded-full blur-2xl"></div>

                <!-- Image Card -->
                <div class="relative bg-white rounded-2xl
                            overflow-hidden shadow-xl border border-gray-200">

                    <img src="{{ asset('images/principal.jpg') }}"
                        alt="Principal - New Era High School"
                        class="w-full h-[420px] object-cover">

                </div>

            </div>

        </div>

        <!-- RIGHT : CONTENT -->
        <div class="lg:col-span-8 reveal delay-200">

            <!-- Label -->
            <span class="inline-flex items-center gap-2 mb-4
                         text-sm font-semibold tracking-wide uppercase text-accent">
                <i class="fa-solid fa-user-tie"></i>
                Message from the Principal
            </span>

            <!-- Quote -->
            <blockquote class="text-xl sm:text-2xl font-semibold text-primary mb-6 leading-relaxed">
                “Education is not the filling of a pail,
                but the lighting of a fire.”
            </blockquote>

            <p class="text-gray-600 leading-relaxed mb-5">
                Welcome to <strong>New Era High School, Abha Nagar</strong>.
                At our institution, we believe education is a transformative
                force—one that shapes minds, builds character, and inspires
                purpose. Our mission is to ignite curiosity, nurture integrity,
                and empower every child to grow into a confident, compassionate,
                and capable individual.
            </p>

            <p class="text-gray-600 leading-relaxed mb-5">
                As a <strong>CBSE-affiliated</strong> institution, we remain
                committed to academic excellence while equally emphasizing
                values, discipline, and critical thinking. We encourage our
                students to question, explore, and learn not merely for
                examinations, but for life.
            </p>

            <p class="text-gray-600 leading-relaxed">
                With the dedicated efforts of our educators and the strong
                partnership of parents, we prepare our students to face the
                future with resilience, responsibility, and a strong moral
                compass—ready to lead with knowledge, humility, and courage.
            </p>

            <!-- Signature -->
            <div class="mt-8">
                <p class="font-semibold text-textMain">
                    Warm regards,
                </p>
                <p class="font-bold text-primary text-lg">
                    Principal
                </p>
                <p class="text-sm text-gray-600">
                    New Era High School, Abha Nagar
                </p>
            </div>

        </div>

    </div>
</section>


@endsection
@extends('layouts.app')